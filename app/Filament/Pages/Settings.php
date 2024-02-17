<?php

namespace App\Filament\Pages;

use App\Models\SiteSettings;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Exceptions\Halt;
use Illuminate\Support\Facades\DB;

class Settings extends Page implements HasForms
{

    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected ?string $heading = 'Ayarlar';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->label('Name'),
                TextInput::make('phone')->required()->label('Phone'),
                TextInput::make('email')->required()->label('Email'),
                TextInput::make('location')->required()->label('Location'),
                TextInput::make('meta_description')->label('Meta Description'),
                TextInput::make('meta_keywords')->label('Meta Keywords'),
                TextInput::make('meta_author')->label('Meta Author'),
                TextInput::make('meta_copyright')->label('Meta Copyright'),
                TextInput::make('meta_og_url')->label('Meta URL'),
                TextInput::make('google_map')->label('Google Map Url'),
                TextInput::make('fb_url')->label('Facebook Url'),
                TextInput::make('twitter_url')->label('Twitter Url'),
                TextInput::make('instagram_url')->label('Instagram Url'),
                TextInput::make('tiktok_url')->label('Tiktok Url'),
                TextInput::make('linkedin_url')->label('LinkedIn Url'),
                TextInput::make('youtube_url')->label('Youtube Url'),
                TextInput::make('site_version')->label('Site Version'),
                TextInput::make('created_by')->label('Created By'),
                FileUpload::make('logo')->image()->required()->label('Logo')->openable()->downloadable(),
                FileUpload::make('favicon')->image()->required()->label('Favicon')->openable()->downloadable(),
                FileUpload::make('slider_image')->image()->label('Slider Image')->openable()->downloadable(),
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save')
        ];
    }

    public function save(): void
    {
        DB::beginTransaction();

        try {
            $data = $this->form->getState();
            SiteSettings::query()->where('id', 1)->update($data);
            DB::commit();
        } catch (Halt $exception) {
            DB::rollBack(1);
            return;
        }

        Notification::make()
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send();
    }
}


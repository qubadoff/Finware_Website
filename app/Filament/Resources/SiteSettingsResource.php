<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteSettingsResource\Pages;
use App\Filament\Resources\SiteSettingsResource\RelationManagers;
use App\Models\SiteSettings;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SiteSettingsResource extends Resource
{
    protected static ?string $model = SiteSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('id')->required()->label('id'),
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('email'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteSettings::route('/'),
            'create' => Pages\CreateSiteSettings::route('/create'),
            'edit' => Pages\EditSiteSettings::route('/{record}/edit'),
        ];
    }
}

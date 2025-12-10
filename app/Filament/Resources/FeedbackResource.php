<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackResource\Pages;
use App\Filament\Resources\FeedbackResource\RelationManagers;
use App\Models\Feedback;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $navigationIcon = 'heroicon-o-Envelope';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                   Tables\Columns\TextColumn::make('nama_lengkap')
                    ->label('Nama Lengkap'),
                    // ->searchable()
                    // ->sortable()
                    // ->toggleable(),
                    Tables\Columns\TextColumn::make('email')
                    ->label('Email'),
                    // ->searchable()
                    // ->sortable()
                    // ->toggleable(),
                    Tables\Columns\TextColumn::make('subjek')
                    ->label('Subjek'),
                    // ->searchable()
                    // ->sortable()
                    // ->toggleable(),
                    Tables\Columns\TextColumn::make('message')
                    ->label('Pesan Email'),
                    // ->searchable()
                    // ->sortable()
                    // ->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListFeedback::route('/'),
            'create' => Pages\CreateFeedback::route('/create'),
            'edit' => Pages\EditFeedback::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobResource\Pages;
use App\Filament\Resources\JobResource\RelationManagers;
use App\Models\Job;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use App\Filament\Resources\JobResource\Pages\ListJobs;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
    ->schema([
        Forms\Components\Select::make('user_id')
            ->label('User')
            ->relationship('user', 'name') // pastikan relasi user ada di model Job
            ->required(),

        Forms\Components\TextInput::make('title')
            ->required()
            ->maxLength(255),

        Forms\Components\Textarea::make('description')
            ->required(),

        Forms\Components\TextInput::make('location')
            ->nullable()
            ->maxLength(255),

        Forms\Components\Select::make('job_type')
            ->options([
                'internship' => 'Internship',
                'part_time' => 'Part Time',
                'full_time' => 'Full Time',
            ])
            ->default('internship')
            ->required(),

        Forms\Components\TextInput::make('industry')
            ->nullable()
            ->maxLength(255),

        Forms\Components\DatePicker::make('start_period')
            ->nullable(),

        Forms\Components\DatePicker::make('end_period')
            ->nullable(),

        Forms\Components\TextInput::make('apply_link')
            ->nullable()
            ->url()
            ->maxLength(255),

        Forms\Components\Select::make('status')
            ->options([
                'pending' => 'Pending',
                'approved' => 'Approved',
                'rejected' => 'Rejected',
            ])
            ->default('pending')
            ->required(),
    ]);

    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('title'),
            TextColumn::make('status')->badge()
                ->color(fn (string $state): string => match ($state) {
                    'approved' => 'success',
                    'rejected' => 'danger',
                    'pending' => 'warning',
                }),
        ])
        ->filters([])
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
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            \App\Filament\Resources\JobResource\Widgets\StatsOverview::class,
        ];
    }

    
}

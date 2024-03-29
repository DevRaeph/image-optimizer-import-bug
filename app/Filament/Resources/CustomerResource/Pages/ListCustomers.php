<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Imports\CustomerImporter;
use App\Filament\Resources\CustomerResource;
use Filament\Actions\CreateAction;
use Filament\Actions\ImportAction;
use Filament\Resources\Pages\ListRecords;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
            ImportAction::make()
                ->importer(CustomerImporter::class)
        ];
    }
}

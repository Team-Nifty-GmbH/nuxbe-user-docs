<?php

namespace TeamNiftyGmbH\NuxbeUserDocs;

use Illuminate\Support\ServiceProvider;
use TeamNiftyGmbH\NuxbeKnowledge\Support\KnowledgeManager;

class NuxbeUserDocsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerDocs();
    }

    protected function registerDocs(): void
    {
        app(KnowledgeManager::class)
            ->registerDocs(
                package: 'nuxbe-user-docs',
                path: [
                    'de' => __DIR__.'/../docs/de',
                    'en' => __DIR__.'/../docs/en',
                ],
                label: 'Nuxbe User Docs',
            );
    }
}

<?php

use TeamNiftyGmbH\NuxbeKnowledge\Support\KnowledgeManager;
use TeamNiftyGmbH\NuxbeUserDocs\NuxbeUserDocsServiceProvider;

test('service provider is registered', function (): void {
    expect(app()->getProviders(NuxbeUserDocsServiceProvider::class))
        ->not->toBeEmpty();
});

test('service provider boots without errors', function (): void {
    $provider = app()->getProvider(NuxbeUserDocsServiceProvider::class);

    expect($provider)->toBeInstanceOf(NuxbeUserDocsServiceProvider::class);
});

test('registers docs with knowledge manager', function (): void {
    $manager = app(KnowledgeManager::class);
    $packages = $manager->getRegisteredPackages();

    expect($packages)->toHaveKey('nuxbe-user-docs');
});

test('registers docs with correct label', function (): void {
    $manager = app(KnowledgeManager::class);
    $packages = $manager->getRegisteredPackages();

    expect($packages['nuxbe-user-docs']['label'])->toBe('Nuxbe User Docs');
});

test('registers docs with de and en paths', function (): void {
    $manager = app(KnowledgeManager::class);
    $packages = $manager->getRegisteredPackages();

    expect($packages['nuxbe-user-docs']['paths'])
        ->toHaveKeys(['de', 'en']);
});

test('registered doc paths exist on disk', function (): void {
    $manager = app(KnowledgeManager::class);
    $packages = $manager->getRegisteredPackages();

    foreach ($packages['nuxbe-user-docs']['paths'] as $locale => $path) {
        expect(is_dir($path))->toBeTrue("Docs path for '{$locale}' does not exist: {$path}");
    }
});

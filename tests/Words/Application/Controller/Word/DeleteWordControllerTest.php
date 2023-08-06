<?php

namespace App\Tests\Words\Application\Controller\Word;

use App\Shared\Domain\Service\UlidService;
use App\Shared\Domain\ValueObject\GlobalUserId;
use App\Tests\AbstractControllerTest;
use App\Tests\Tools\FixtureTools;
use App\Words\Domain\Entity\Category;
use App\Words\Domain\Entity\Word;
use App\Words\Infrastructure\Repository\CategoryRepository;
use App\Words\Infrastructure\Repository\WordRepository;
use Faker\Factory;
use Symfony\Component\HttpFoundation\Response;

class DeleteWordControllerTest extends AbstractControllerTest
{
    public function test_delete_word_success(): void
    {
        $this->loadUserFixture();
        $this->loadCategoryFixture();
        $word = $this->loadWordFixture();

        $this->client->request(
            'DELETE',
            '/api/words/' . $word->getId(),
            [],
            [],
            ['CONTENT_TYPE' => 'application/json']
        );

        $this->assertResponseStatusCodeSame(Response::HTTP_NO_CONTENT);
    }
}

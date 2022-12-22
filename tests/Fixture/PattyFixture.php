<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PattyFixture
 */
class PattyFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'patty';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'role' => 'Lorem ip',
                'password' => 'Lorem ipsum dolor sit amet',
                'phone' => 1,
            ],
        ];
        parent::init();
    }
}

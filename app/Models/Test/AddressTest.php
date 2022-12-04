<?php
namespace App\Models\Test;

use App\Models\Address;
use Tests\TestCase;

class AddressTest extends TestCase
{
  /**
   * @test
   */
  public function test_get_user_id()
  {
    setup:
    $address = new Address(
      1,
      '0000001',
      '12345678',
      '東京都渋谷区ホゲホゲ'
    );

    when:
    $actual = $address->getUserId();

    then:
    $this->assertEquals('0000001', $actual);
  }
}
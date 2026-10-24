<?php

namespace Tests\Feature;

use Tests\TestCase;

class HhpWebsiteTest extends TestCase
{
    public function test_homepage_shows_hhp_and_inquiry_sections(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('HHP Land Arrangement')
            ->assertSee('id="layanan"', false)
            ->assertSee('id="destinasi"', false)
            ->assertSee('id="konsultasi"', false)
            ->assertSee('hotel-view.mp4')
            ->assertSee('haram-view.mp4');
    }

    public function test_no_contact_uses_local_summary_without_fake_whatsapp(): void
    {
        config(['hhp.whatsapp' => '']);
        $this->get('/')
            ->assertOk()
            ->assertSee('BUAT RINGKASAN KEBUTUHAN')
            ->assertSee('data-whatsapp=""', false)
            ->assertDontSee('wa.me/628');
    }

    public function test_configured_contact_enables_whatsapp_label(): void
    {
        config(['hhp.whatsapp' => '12345678901']);
        $this->get('/')
            ->assertOk()
            ->assertSee('LANJUTKAN KE WHATSAPP')
            ->assertSee('data-whatsapp="12345678901"', false);
    }
}

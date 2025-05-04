<?php

namespace App\Services;

use App\Repositories\Interfaces\AdminPanelSettingInterface;


class AdminPanelSettingService
{
    public function __construct(protected AdminPanelSettingInterface $AdminPanelSetting) {}

    public function index()
    {
        return $this->AdminPanelSetting->getData();
    }
}
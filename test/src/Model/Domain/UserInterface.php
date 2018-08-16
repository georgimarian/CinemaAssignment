<?php

namespace Model\Domain;

interface UserInterface
{
    public function getEmailAddress(): string;

    public function getUsername(): string;

}
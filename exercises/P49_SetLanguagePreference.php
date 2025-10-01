<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class P49_SetLanguagePreference
{
    private array $allowedLanguages = ['en', 'es', 'fr', 'de'];

    public function main(): void
    {
        // Write your code here
        $defaultLang = 'en';
        $language = $_GET['lang'] ?? '';
        if (!in_array($language, $this->allowedLanguages, true)) {
            $language = $defaultLang;
        }
        
        switch ($language) {
            case 'en':
                $_SESSION['lang'] = 'en';
                echo "Language set to en";
                break;
            case 'es':
                $_SESSION['lang'] = 'es';
                echo "Language set to es";
                break;
            case 'fr':
                $_SESSION['lang'] = 'fr';
                echo "Language set to fr";
                break;
            case 'de':
                $_SESSION['lang'] = 'de';
                echo "Language set to de";
                break;
        }
    }
}
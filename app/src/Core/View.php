<?php

namespace App\Core;

class View
{
    private static string $viewsPath = __DIR__ . '/../Views/';

    // /**
    //  * Rendu d'une vue avec des données optionnelles.
    //  *
    //  * @param string $view Le nom du fichier de la vue (sans extension .php).
    //  * @param array $data Les données à passer à la vue.
    //  * @throws \Exception Si le fichier de la vue n'existe pas.
    //  */
    // public static function render(string $view, array $data = []): void
    // {
    //     // Construire le chemin complet du fichier de la vue
    //     $filePath = self::$viewsPath . $view . '.php';

    //     // Vérifier si le fichier existe
    //     if (!file_exists($filePath)) {
    //         throw new \Exception("La vue '{$view}' est introuvable dans le dossier des vues.");
    //     }

    //     // Extraire les données pour les rendre disponibles sous forme de variables
    //     extract($data);

    //     // Inclure le fichier de la vue
    //     require $filePath;
    // }

    /**
     * Rendu d'un template avec une vue imbriquée.
     *
     * @param string $view Le nom du fichier de la vue imbriquée (sans extension .php).
     * @param array $data Les données à passer à la vue et au template.
     * @param string $template Le nom du fichier du template (sans extension .php) (par défaut front).
     * @throws \Exception Si le fichier du template ou de la vue est introuvable.
     */
    public static function render(string $view, array $data = [], string $template = "templates/front"): void
    {
        $templatePath = self::$viewsPath . $template . '.php';
        if (!file_exists($templatePath)) {
            throw new \Exception("Le template '{$template}' est introuvable dans le dossier des vues.");
        }

        $filePath = self::$viewsPath . $view . '.php';
        if (!file_exists($filePath)) {
            throw new \Exception("La vue '{$view}' est introuvable dans le dossier des vues.");
        }

        ob_start();
        extract($data);
        require $filePath;
        $viewContent = ob_get_clean();

        extract($data);
        
        // La variable $viewContent contient la vue imbriquée
        require $templatePath;
    }
}
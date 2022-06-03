<?php


namespace WPT\Controllers\Render;

/**
 * Name: Render HTML
 * Create the method that renders views
 * @package Controller/Render
 * @since 1.0.0
 */
abstract class Render implements InterfaceRender
{
    /**
     * Render HTML files
     * @param string $file
     * @param array $dados
     * @return string
     */
    public function render( $file, $dados )
    {
        extract($dados);
        ob_start();
        
        require __DIR__ . '/../../Views/' . $file;
        $html = ob_get_clean();

        return $html;
    }
}
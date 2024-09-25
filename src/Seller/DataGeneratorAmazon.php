<?php 
namespace SellingPartnerApi\Seller;

use Illuminate\Support\Facades\Log;

class DataGeneratorAmazon
{
    private $API_URL;
    
    public function __construct()
    {
        $this->API_URL = "http://192.168.1.118:521/api"; // Recupera l'URL dell'API esterna dall'ambiente
    }
    
    /**
     * callVatCalculationApi
     *
     * @param int $page Il numero della pagina da richiedere all'API.
     *
     * @return \Psr\Http\Message\ResponseInterface
     * Restituisce la risposta dell'API.
     */
    public function callVatCalculationApi($page)
    {
        try{
            $client = new \GuzzleHttp\Client(); // Crea un'istanza del client HTTP Guzzle
            $apiUrl = $this->API_URL . '/vat-calculation'; // Recupera l'URL dell'API esterna dall'ambiente
            // Esegui la chiamata API e restituisci la risposta
            return $client->post($apiUrl, [
                'form_params' => [
                    'page' => $page,
                    'key' => 'dJQn4>501<#R'
                ]
            ]);
        }
        catch(\Exception $e){
            Log::info('Error: ' . $e->getMessage());
        }
    }

    /**
     * callFlatfileVatInvoiceDataApi
     *
     * Questa funzione effettua una richiesta POST all'API esterna per
     * recuperare i dati relativi alla pagina specificata.
     *
     * @param int $page Il numero della pagina da richiedere all'API.
     *
     * @return \Psr\Http\Message\ResponseInterface
     * Restituisce la risposta dell'API.
     */
    public function callFlatfileVatInvoiceDataApi($page)
    {
        try{
            $client = new \GuzzleHttp\Client(); // Crea un'istanza del client HTTP Guzzle
            $apiUrl = $this->API_URL . '/flatfile-vat-invoice-data'; // Recupera l'URL dell'API esterna dall'ambiente
            Log::info('API URL: ' . $apiUrl);
            // Esegui la chiamata API e restituisci la risposta
            return $client->post($apiUrl, [
                'form_params' => [
                    'page' => $page,
                    'key' => 'dJQn4>501<#R'
                ]
            ]);
        }
        catch(\Exception $e){
            Log::info('Error: ' . $e->getMessage());
        }
    }

    /**
     * callCollectionsDataApi
     *
     * Questa funzione effettua una richiesta POST all'API esterna per
     * recuperare i dati relativi alla pagina specificata.
     *
     * @param int $page Il numero della pagina da richiedere all'API.
     *
     * @return \Psr\Http\Message\ResponseInterface
     * Restituisce la risposta dell'API.
     */
    public function callCollectionsDataApi($page)
    {
        try{
            $client = new \GuzzleHttp\Client(); // Crea un'istanza del client HTTP Guzzle
            $apiUrl = $this->API_URL . '/collections-data'; // Recupera l'URL dell'API esterna dall'ambiente

            // Esegui la chiamata API e restituisci la risposta
            return $client->post($apiUrl, [
                'form_params' => [
                    'page' => $page,    
                    'key' => 'dJQn4>501<#R'
                ]
            ]);
        }
        catch(\Exception $e){
            Log::info('Error: ' . $e->getMessage());
        }
    }
}
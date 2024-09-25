<?php 
namespace SellingPartnerApi\Seller;

class DataGeneratorAmazon
{
    private $API_URL;
    
    public function __construct()
    {
        $this->API_URL = "http://localhost:521"; // Recupera l'URL dell'API esterna dall'ambiente
    }
    /**
     * callVatCalculationApi
     *
     * @param int $page Il numero della pagina da richiedere all'API.
     *
     * @return \Psr\Http\Message\ResponseInterface
     * Restituisce la risposta dell'API.
     */
    private function callVatCalculationApi($page)
    {
        $client = new \GuzzleHttp\Client(); // Crea un'istanza del client HTTP Guzzle
        $apiUrl = $this->API_URL . '/vat-calculation'; // Recupera l'URL dell'API esterna dall'ambiente

        // Esegui la chiamata API e restituisci la risposta
        return $client->post($apiUrl, [
            'form_params' => [
                'page' => $page,    // Parametro della pagina da richiedere
            ]
        ]);
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
    private function callFlatfileVatInvoiceDataApi($page)
    {
        $client = new \GuzzleHttp\Client(); // Crea un'istanza del client HTTP Guzzle
        $apiUrl = $this->API_URL . '/flatfile-vat-invoice-data'; // Recupera l'URL dell'API esterna dall'ambiente

        // Esegui la chiamata API e restituisci la risposta
        return $client->post($apiUrl, [
            'form_params' => [
                'page' => $page,    // Parametro della pagina da richiedere
            ]
        ]);
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
    private function callCollectionsDataApi($page)
    {
        $client = new \GuzzleHttp\Client(); // Crea un'istanza del client HTTP Guzzle
        $apiUrl = $this->API_URL . '/collections-data'; // Recupera l'URL dell'API esterna dall'ambiente

        // Esegui la chiamata API e restituisci la risposta
        return $client->post($apiUrl, [
            'form_params' => [
                'page' => $page,    // Parametro della pagina da richiedere
            ]
        ]);
    }
}
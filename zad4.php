<?php
class Thesaurus {
    private $data;

    public function __construct() {
        // Inicjalizacja tezaurusa
        $this->data = array(
            "market" => array("trade"),
            "small" => array("little", "compact")
        );
    }

    public function getSynonyms($word) {
        if (array_key_exists($word, $this->data)) {
            // Słowo istnieje w tezaurusie
            $synonyms = $this->data[$word];
        } else {
            // Brak synonimów dla danego słowa
            $synonyms = array();
        }

        $result = array(
            'word' => $word,
            'synonyms' => $synonyms
        );

        return json_encode($result);
    }
}

// Przykładowe użycie
$thesaurus = new Thesaurus();
// echo $thesaurus->getSynonyms("small");  // Zwraca '{"word":"small","synonyms":["little","compact"]}'
echo $thesaurus->getSynonyms("asleast");  // Zwraca '{"word":"asleast","synonyms":[]}'
?>
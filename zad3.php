<?php
class RankingTable {
    private $players;
    private $results;

    public function __construct($players) {
        $this->players = $players;
        $this->results = array();
    }

    public function recordResult($player, $score) {
        $this->results[$player] = $score;
    }

    public function playerRank($rank) {
        arsort($this->results); // Sortowanie wyników w kolejności malejącej

        $rankedPlayers = array_keys($this->results);

        // Zwracanie gracza na podanym rankingu
        return $rankedPlayers[$rank - 1];
    }
}

// Przykładowe użycie
$table = new RankingTable(array('Jan', 'Maks', 'Monika'));
$table->recordResult('Jan', 2);
$table->recordResult('Maks', 3);
$table->recordResult('Monika', 5);
echo $table->playerRank(1);  // Zwraca "Monika"
?>
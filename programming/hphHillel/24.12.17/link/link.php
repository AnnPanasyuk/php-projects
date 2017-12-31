<?php
  class Board {
    private $board = [
      ['a', 'b', 'c', 'd'],
      ['d', 'k', 'l', 'm'],
      ['m', 'f', 'b', 's']
    ];

    private $searchWord;
    private $cursor;
    private $x = [];
    private $y = [];

    public function __construct($board = null) {
      if ($board != null) {
        $this->board = $board;
      }
    }

    public function searchWord($word) {
      $this->searchWord = str_split($word);
      if (!$this->setStart($this->searchWord[0])) {
        return false;
      }
      array_shift($this->searchWord);

      for ($this->cursor = 0; $this->cursor < count($this->x); $this->cursor++) {
        if ($this->searchLocalWord($this->x[$this->cursor], $this->y[$this->cursor])) {
          return true;
        }
      }

      return false;
    }

    private function searchLocalWord($x, $y) {
      if (count($this->searchWord) == 0) {
        return true;
      }

      $letter = array_shift($this->searchWord);

      if ($this->board[$x+1][$y] == $letter) {
        $this->x[$this->cursor] += 1;
      } elseif ($this->board[$x-1][$y] == $letter) {
        $this->x[$this->cursor] -= 1;
      } elseif ($this->board[$x][$y+1] == $letter) {
        $this->y[$this->cursor] += 1;
      } elseif ($this->board[$x][$y-1] == $letter) {
        $this->y[$this->cursor] -= 1;
      } else {
        return false;
      }

      return $this->searchLocalWord($this->x[$this->cursor], $this->y[$this->cursor]);
    }

    private function setStart($letter) {
      for ($i = 0; $i < count($this->board); $i++) {
        for ($j = 0; $j < count($this->board[$i]); $j++) {
          if ($this->board[$i][$j] == $letter) {
            $this->x[] = $i;
            $this->y[] = $j;
          }
        }
      }

      if (count($this->x) == 0) {
        return false;
      } else {
        return true;
      }
    }
  }

  $b = new Board();
  var_dump($b->searchWord('abcdmlkdmfbs'));


    <?php
    class Movie
    {
        public $title;
        public $duration;
        public $genre;
        public $DescDuration;

        public function __construct($title, $genre, $duration)
        {
            $this->title = $title;
            $this->genre = $genre;
            $this->duration = $duration;
        }
        public function setDuration($duration)
        {
            if ($duration <= 60) {
                $this->DescDuration = "Corta durata, il film dura $duration Minuti";
            } else if ($duration > 60 && $duration <= 90) {
                $this->DescDuration = "Media durata, il film dura $duration Minuti";
            } else {
                $this->DescDuration = "Lunga durata, il film dura $duration Minuti";
            }
        }
        public function getDuration()
        {
            return $this->DescDuration;
        }
    };
    $avatar = new Movie('Avatar', 'fantasy', 60);
    $avatar->setDuration(60);
    $thor = new Movie('Thor', 'Azione, fantasy, Avventura', 90);
    $thor->setDuration(90);
    $DrStrange = new Movie('Doctor Strange', 'Azione, fantasy, Avventura', 115);
    $DrStrange->setDuration(115);
    var_dump($avatar);
    var_dump($thor);
    var_dump($DrStrange);
    ?>
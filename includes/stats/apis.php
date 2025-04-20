<?php

class API {
    private $keys;

    public function __construct() {
        $this->keys = json_decode(file_get_contents("./credentials.json"), true);
    }

    public function GitHub(string $path) {
        exec("curl -A \"Minteck-Space/0.0.0 (nekostarfan@gmail.com)\" -H \"Authorization: token " . $this->keys["github"] . "\" https://api.github.com/" . $path, $op);
        $result = implode("\n", $op);

        return $result;
    }

    public function Reddit(string $path) {
        exec("curl -A \"Minteck-Space/0.0.0 (nekostarfan@gmail.com)\" https://www.reddit.com/" . $path . ".json", $op);
        $result = implode("\n", $op);

        return $result;
    }
}

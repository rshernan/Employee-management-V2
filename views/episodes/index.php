<?php

//episodes list
foreach ($this->data as $episode) {
    echo "Name: $episode->name ($episode->id)<br>";
}

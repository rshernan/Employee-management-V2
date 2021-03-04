<?php

class TravelController extends Controller{
    function render()
    {
        $this->view->data = $this->model->getAllTravelExt();
        if ($this->view->data) {
            $this->view->render('travel/index');
        } else {
            ErrorController::renderError('Could not get travel');
        }
    }

    function renderCharacters($id)
    {
        $this->view->data = $this->model->getCharactersOnTravel($id);
        if ($this->view->data) {
            $this->view->render('travel/character');
        } else {
            ErrorController::renderError('Could not get travel');
        }
    }
    function renderOriginLoc($id_loc)
    {
        $this->view->data = $this->model->getLocationTravelInfo($id_loc);
        if ($this->view->data) {
            $this->view->render('travel/location');
        } else {
            ErrorController::renderError('Could not get travel');
        }
    }
    function renderTargetLoc($id_loc)
    {
        $this->view->data = $this->model->getLocationTravelInfo($id_loc);
        if ($this->view->data) {
            $this->view->render('travel/location');
        } else {
            ErrorController::renderError('Could not get travel');
        }
    }
    function renderEpisode($id_ep)
    {
        $this->view->data = $this->model->getEpisodeTravelInfo($id_ep);
        if ($this->view->data) {
            $this->view->render('travel/location');
        } else {
            ErrorController::renderError('Could not get travel');
        }
    }
    /* function details($params)
    {
        $this->view->data = $this->model->getById($params[0]);
        if ($this->view->data) {
            $this->view->render('episodes/detail');
        } else {
            ErrorController::renderError("Could not get travel");
        }
    } */
}


<?php

class WebUser extends CWebUser {

    /**
     * Logging user action
     * @param $action CAction Action to log
     */
    public function logActivity($action) {
        // Getting history data from session
        $history = $this->getState('history', CJSON::encode([]));
        $historyData = CJSON::decode($history);
        // Appending new event to history data
        $historyData[] = $action->getId();
        // Saving history data to session
        $history = CJSON::encode($historyData);
        $this->setState('history', $history);
    }

    /**
     * Getting user action history
     * @return array History
     */
    public function getActivity() {
        $history = $this->getState('history', CJSON::encode([]));
        return CJSON::decode($history);
    }
} 
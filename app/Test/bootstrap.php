<?php
ini_set('include_path', ROOT . DS . 'lib' . PATH_SEPARATOR . ini_get('include_path'));
ini_set('session.save_path', APP . 'tmp/sessions');
Configure::write('debug', 0);

<?php

class Core
{
    protected static $controller = 'index';
    protected static $method = 'index';
    protected static $files_list = [];
    protected static $_server_url;

    public function __construct()
    {
        global $route_url;
        self::$_server_url = $route_url;
        self::setUrl();
    }

    public static function setUrl()
    {
        $url = self::$_server_url;
        $params = explode('/', rtrim($url));
        $constants_lists = glob(APP_DIR . 'constants/*');
        $helpers_lists = glob(APP_DIR . 'helpers/*');
        self::requireFiles($constants_lists);
        self::requireFiles($helpers_lists);
        $directory_path = APP_DIR . 'controllers/';
        
        if (!empty($params[0])) {
            if (is_dir($directory_path . $params[0])) {
                if (isset($params[1]) && !empty($params[1])) {
                    if (is_dir($directory_path . $params[0] . '/' . $params[1])) {
                        $directory = $params[0];
                        unset($params[0]);
                        $sub_directory = $params[1];
                        unset($params[1]);
                        if (isset($params[2]) && !empty($params[2])) {
                            self::$controller = $params[2];
                            unset($params[2]);
                        }
                        if (isset($params[3]) && !empty($params[3])) {
                            self::$method = $params[3];
                            unset($params[3]);
                        }
                        $controllerName = get_controller_name(self::$controller);
                        $directory_path .= $directory . '/' . $sub_directory . '/';
                        $file_name = $directory_path . $controllerName . '.php';
                    } else {
                        $directory = $params[0];
                        unset($params[0]);
                        if (isset($params[1]) && !empty($params[1])) {
                            self::$controller = $params[1];
                            unset($params[1]);
                        }
                        if (isset($params[2]) && !empty($params[2])) {
                            self::$method = $params[2];
                            unset($params[2]);
                        }
                        $controllerName = get_controller_name(self::$controller);
                        $directory_path .= $directory . '/';
                        $file_name = APP_DIR . $directory_path . $controllerName . '.php';
                    }
                } else {
                    $directory = $params[0];
                    unset($params[0]);
                    if (isset($params[1]) && !empty($params[1])) {
                        self::$controller = $params[1];
                        unset($params[1]);
                    }
                    if (isset($params[2]) && !empty($params[2])) {
                        self::$method = $params[2];
                        unset($params[2]);
                    }
                    $controllerName = get_controller_name(self::$controller);
                    $directory_path .= $directory . '/';
                    $file_name = APP_DIR . $directory_path . $controllerName . '.php';
                }
            } else {
                if (isset($params[0]) && !empty($params[0])) {
                    self::$controller = $params[0];
                    unset($params[0]);
                }
                if (isset($params[1]) && !empty($params[1])) {
                    self::$method = $params[1];
                    unset($params[1]);
                }
                $controllerName = get_controller_name(self::$controller);
                $file_name = $directory_path . $controllerName . '.php';
            }
        } else {
            $controllerName = get_controller_name(self::$controller);;
            $file_name = $directory_path . $controllerName . '.php';
        }

        $method_name = str_replace('-', '', self::$method);
        $arguments = array_values($params);
        if (file_exists($file_name)) {
            require_once $file_name;
            if (class_exists($controllerName)) {
                $conObj = new $controllerName();
                if (method_exists($conObj, $method_name)) {
                    $conObj->$method_name(...$arguments);
                } else {
                    exit('Undefined Method in Class:- ' . $controllerName);
                }
            } else {
                return redirect('page-not-found');
            }
        } else {
            redirect(SITE_URL . 'page-not-found');
        }
    }

    public static function requireFiles($dir)
    {
        foreach ($dir as $con) {
            if (preg_match('/\.php$/', $con)) {
                if (is_file($con)) {
                    require_once $con;
                }
            } elseif (is_dir($con)) {
                self::requireFiles(glob($con . '/*'));
            }
        }
    }

    public static function getFilesArray($dir)
    {
        foreach ($dir as $con) {
            if (preg_match('/\.php$/', $con)) {
                if (is_file($con)) {
                    self::$files_list[] = $con;
                }
            } elseif (is_dir($con)) {
                self::getFilesArray(glob($con . '/*'));
            }
        }
        return self::$files_list;
    }
}

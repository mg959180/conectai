<?php

class Pagination
{

    private $_page_num;
    private $_records_per_page;
    private $_lower_limit;
    private $_total_records;
    private $_total_pages;
    private $_adjacents = 2;

    public function __construct($total_records, $pagenum = 1, $rpp = 10)
    {

        if (!(isset($pagenum))) {

            $this->_page_num = 1;
        } else {

            $this->_page_num = $pagenum;
        }
        $this->_records_per_page = ($rpp <> "" && is_numeric($rpp)) ? $rpp : 10;
        $this->_total_records = intval($total_records);

        //Calculate the last page based on total number of rows and rows per page.

        $this->_total_pages = ceil($this->_total_records / $this->_records_per_page);
        $this->setPageNum();
    }

    private function setPageNum()
    {

        if ($this->_page_num < 1) {

            $this->_page_num = 1;
        } elseif ($this->_page_num > $this->_total_pages) {

            $this->_page_num = $this->_total_pages;
        }

        $this->_page_num = intval($this->_page_num);

        $this->_lower_limit = ($this->_page_num - 1) * $this->_records_per_page;

        // incase lower limits goes to below zero
        $this->_lower_limit = ($this->_lower_limit < 0) ? 0 : $this->_lower_limit;
    }

    public function displayLinks($pagename, $class_name)
    {

        if ($this->_total_pages > 0) {
            if ($this->_page_num > 1) {
                echo '<li><a href=' . $pagename . '"/pagenum=1">First</a></li>';
                echo '<li><a href="' . $pagename . '"/pagenum="' . ($this->_page_num - 1) . '"><i class="fa fa-arrow-left"></i></a></li>';
            }
            if ($this->_total_pages < 7 + ($this->_adjacents * 2)) {
                for ($i = 1; $i <= $this->_total_pages; $i++) {
                    if ($i == $this->_page_num) {
                        echo '<li class="active" ><a href="javascript:void(0);">' . $i . '</a></li>';
                    } else {
                        echo '<li><a href="' . $pagename . '"/pagenum="' . $i . '">' . $i . '</a></li>';
                    }
                }
            } else if ($this->_total_pages > 5 + ($this->_adjacents * 2)) {
                if ($this->_page_num < 1 + ($this->_adjacents * 2)) {
                    for ($i = 1; $i <= 4 + ($this->_adjacents * 2); $i++) {
                        if ($i == $this->_page_num) {
                            echo '<li class="active" ><a href="javascript:void(0);">' . $i . '</a></li>';
                        } else {
                            echo '<li><a href="' . $pagename . '"/pagenum="/>' . $i . '">' . $i . '</a></li>';
                        }
                    }
                    echo "<li><span>...</span></li>";
                } elseif ($this->_total_pages - ($this->_adjacents * 2) > $this->_page_num && $this->_page_num > ($this->_adjacents * 2)) {
                    echo '<li><a href="' . $pagename . '"/pagenum=1">1</a></li>';
                    echo '<li><a href="' . $pagename . '"/pagenum=2">2</a></li>';
                    echo "<li><span>...</span></li>";
                    for ($i = $this->_page_num - $this->_adjacents; $i <= ($this->_page_num + $this->_adjacents); $i++) {
                        if ($i == $this->_page_num) {
                            echo '<li class="active" ><a href="javascript:void(0);">' . $i . '</a></li>';
                        } else {
                            echo '<li><a href="' . $pagename . '"/pagenum="' . $i . '">' . $i . '</a></li>';
                        }
                    }
                } else {
                    echo '<li><a href="' . $pagename . '"/pagenum=1">1</a></li>';
                    echo '<li><a href="' . $pagename . '"/pagenum=2">2</a></li>';
                    echo "<li><span>...</span></li>";
                    for ($i = $this->_total_pages - (2 + ($this->_adjacents * 2)); $i <= $this->_total_pages; $i++) {
                        if ($i == $this->_page_num) {
                            echo '<li class="active"><a href="javascript:void(0);">' . $i . '</a></li>';
                        } else {
                            echo '<li><a href="' . $pagename . '"/pagenum="' . $i . '">' . $i . '</a></li>';
                        }
                    }
                }
            }
            if (($this->_page_num + 1) <= $this->_total_pages) {
                echo '<li><a href="' . $pagename . '"/pagenum="' . ($this->_page_num + 1) . '"><i class="fa fa-arrow-right"></i></a></li>';
            }
            if ($this->_page_num != $this->_total_pages) {
                echo '<li><a href="' . $pagename . '"/pagenum="' . ($this->_total_pages) . '">Last</a></li>';
            }
        }
    }

    public function displayAjaxLinks($pagename, $class_name = 'pagingnumbers')
    {
        if ($this->_total_pages > 0) {
            if ($this->_page_num > 1) {
                echo '<li><a href="javascript:void(0);" data-val="' . ($this->_page_num - 1) . '" class="' . $class_name . '"><i class="fa fa-arrow-left"></i></a></li>';
            }
            if ($this->_total_pages < 7 + ($this->_adjacents * 2)) {
                for ($i = 1; $i <= $this->_total_pages; $i++) {
                    $sel_class = ($i == $this->_page_num) ? ' active non' : '';
                    echo '<li><a href="javascript:void(0);" data-val="' . ($i) . '" class="' . $class_name . $sel_class . '">' . $i . '</a></li>';
                }
            } else if ($this->_total_pages > 5 + ($this->_adjacents * 2)) {
                if ($this->_page_num < 1 + ($this->_adjacents * 2)) {
                    for ($i = 1; $i <= 4 + ($this->_adjacents * 2); $i++) {
                        $sel_class = ($i == $this->_page_num) ? ' active non' : '';
                        echo '<li><a href="javascript:void(0);" data-val="' . ($i) . '" class="' . $class_name . $sel_class . '">' . $i . '</a></li>';
                    }
                    echo "<li><span>...</span></li>";
                } elseif ($this->_total_pages - ($this->_adjacents * 2) > $this->_page_num && $this->_page_num > ($this->_adjacents * 2)) {
                    echo '<li><a href="javascript:void(0);" data-val="' . (1) . '" class="' . $class_name . '">1</a></li>';
                    echo '<li><a href="javascript:void(0);" data-val="' . (2) . '" class="' . $class_name . '">2</a></li>';
                    echo "<li><span>...</span></li>";
                    for ($i = $this->_page_num - $this->_adjacents; $i <= ($this->_page_num + $this->_adjacents); $i++) {
                        $sel_class = ($i == $this->_page_num) ? ' active non' : '';
                        echo '<li><a href="javascript:void(0);" data-val="' . ($i) . '" class="' . $class_name . $sel_class . '">' . $i . '</a></li>';
                    }
                } else {
                    echo '<li><a href="javascript:void(0);" data-val="' . (1) . '" class="' . $class_name . '">1</a></li>';
                    echo '<li><a href="javascript:void(0);" data-val="' . (2) . '" class="' . $class_name . '">2</a></li>';
                    echo "<li><span>...</span></li>";
                    for ($i = $this->_total_pages - (2 + ($this->_adjacents * 2)); $i <= $this->_total_pages; $i++) {
                        $sel_class = ($i == $this->_page_num) ? ' active non' : '';
                        echo '<li><a href="javascript:void(0);" data-val="' . ($i) . '" class="' . $class_name . $sel_class . '">' . $i . '</a></li>';
                    }
                }
            }
            if (($this->_page_num + 1) <= $this->_total_pages) {
                echo '<li><a href="javascript:void(0);" data-val="' . ($this->_page_num + 1) . '" class="' . $class_name . '"><i class="fa fa-arrow-right"></i></a></li>';
            }
            if ($this->_page_num != $this->_total_pages) {
                echo '<li><a href="javascript:void(0);" data-val="' . ($this->_total_pages) . '" class="' . $class_name . '">Last</a></li>';
            }
        }
    }

    public function totalPages()
    {
        return $this->_total_pages;
    }

    public function getLowerLimit()
    {
        return $this->_lower_limit;
    }

    public function getPageNumber()
    {
        return $this->_page_num;
    }

    public function totalRecords()
    {
        return $this->_total_records;
    }

    public function setTotalRecords($count)
    {
        return $this->_total_records = $count;
    }

    public function recordsPerPage()
    {
        return $this->_records_per_page;
    }
}

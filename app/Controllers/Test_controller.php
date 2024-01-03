<?php

namespace App\Controllers;

use App\Models\test_model;
use CodeIgniter\Controller;

class Test_controller extends Controller
{
    public function index()
    {
        $stdview_model = new test_model();
        $data['std'] = $stdview_model->revdata();

        $name = [];
        $age = [];
        $adno = [];

        if ($this->request->getMethod() == 'post') {
            $selectedRecords = $this->request->getVar('selectedRecords');

            // Display or process the selected records as needed
            foreach ($selectedRecords as $selectedId) {
                $adno[] = $selectedId;
                $name[] = $this->request->getVar("name_$selectedId");
                $age[] = $this->request->getVar("age_$selectedId");
                // Print or process the data as needed
            }
        }

        for ($i = 0; $i < count($name); $i++) {
            
            print($adno[$i]);
            echo "  ";
            print($name[$i]);
            echo "  ";
            print($age[$i]);
            echo "<br>";
        }

        return view('test_view', $data);
    }
}

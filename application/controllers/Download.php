<?php
error_reporting(0);
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Download extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('home_model');
	}
    	//MULTIPLE EKSPORT
	public function multiple_spreadsheet()
	{
        $this->load->view('index');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename=1.1 KK Perhitungan IFRS_New Contract_Agent-Principal.xlsx');
		
		$spreadsheet = new Spreadsheet();

		//fetch my data
		$productlist=$this->home_model->review_list();

		$spreadsheet->getDefaultStyle()->getFont()->setName('Trebuchet MS');
        $spreadsheet->setActiveSheetIndex(0)->getStyle('A6:AT7')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
        $spreadsheet->setActiveSheetIndex(0)->getStyle('A8:AT8')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');
        $spreadsheet->setActiveSheetIndex(0)->getStyle('A6:AU7')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);
        $spreadsheet->setActiveSheetIndex(0)->getStyle('A6:AU7')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->setActiveSheetIndex(0)->getStyle('A6:AU7')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->setActiveSheetIndex(0)->getStyle('A6:AT2000')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

        $styleArray = [
            'font' => [
                'bold' => true,
            ],
        ];
        $spreadsheet->setActiveSheetIndex(0)->getStyle('A6:AP7')->applyFromArray($styleArray);
        $spreadsheet->setActiveSheetIndex(0)->getStyle('A1:C4')->applyFromArray($styleArray);

        $styleArray1 = [
            'font' => [
                'size' => 10,
            ],
        ];
        $spreadsheet->setActiveSheetIndex(0)->getStyle('A1:AP5000')->applyFromArray($styleArray1);
        $spreadsheet->setActiveSheetIndex(0)->getStyle('A9:AP5000')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);

        for ($i = 'A'; $i !=  $spreadsheet->setActiveSheetIndex(0)->getHighestColumn(); $i++) {
            $spreadsheet->setActiveSheetIndex(0)->getColumnDimension($i)->setAutoSize(TRUE);
        }

		$sheet = $spreadsheet->setActiveSheetIndex(0);
		$sheet0_1 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('A1:D1');
		$sheet0_2 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('A2:C2');
		$sheet0_3 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('A3:C3');
		$sheet0_4 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('A4:C4');
		$sheet0_1->setCellValue('A1', 'Contract Review IFRS 15 / PSAK 72');
		$sheet0_2->setCellValue('A2', 'Step 1 - Contracts Identification');
		$sheet0_3->setCellValue('A3', 'PT Telkom Indonesia Tbk');
		$sheet0_4->setCellValue('A4', 'F. Year');

		//HEADER STEP 1
		//MERGE
		$sheet1 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('A6:A7');
		$sheet2 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('B6:B7');
		$sheet3 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('C6:C7');
		$sheet4 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('D6:D7');
		$sheet5 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('E6:E7');
		$sheet6 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('F6:F7');
		$sheet7 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('G6:G7');
		$sheet8 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('H6:H7');
		$sheet9 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('I6:I7');
		$sheet10 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('J6:J7');
		$sheet11 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('K6:K7');
		$sheet12 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('L6:L7');
		$sheet13 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('M6:O6');
		$sheet14 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('P6:V6');
		$sheet15 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('W6:AD6');
		$sheet16 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('AE7:AF7');
		$sheet17 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('AG6:AK6');
		$sheet18 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('AL6:AP6');
		$sheet19 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('AQ6:AQ7');
		$sheet20 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('AR6:AR7');
		$sheet21 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('AS6:AS7');
		$sheet22 = $spreadsheet->setActiveSheetIndex(0)->mergeCells('AT6:AT7');

		$sheet0_1->setCellValue('A1', 'Contract Review IFRS 15 / PSAK 72');
		$sheet0_2->setCellValue('A2', 'Step 1 - Contracts Identification');
		$sheet0_3->setCellValue('A3', 'PT Telkom Indonesia Tbk');
		$sheet0_4->setCellValue('A4', 'F. Year');
		$sheet->setCellValue('A5', '');
		$sheet->setCellValue('A6', '');
        $sheet1->setCellValue('A6', 'No ');
        $sheet2->setCellValue('B6', 'SID');
        $sheet3->setCellValue('C6', 'Order');
        $sheet4->setCellValue('D6', 'Order + SID');
        $sheet5->setCellValue('E6', 'Order Amount (Nilai Tibs)');
        $sheet6->setCellValue('F6', 'Contract Number');
        $sheet7->setCellValue('G6', 'Customer Account Number');
        $sheet8->setCellValue('H6', 'Customer Name');
        $sheet9->setCellValue('I6', 'Segment');
        $sheet10->setCellValue('J6', 'Stated contract start date');
        $sheet11->setCellValue('K6', 'Stated contract end date');
        $sheet12->setCellValue('L6', 'Stated contract amount');
		$sheet13->setCellValue('M6', 'Lease assessment');
		$sheet14->setCellValue('P6', 'Definition of contract');
		$sheet15->setCellValue('W6', 'Contract enforceability period');
		$sheet16->setCellValue('AE6', 'Renewal option');
		$sheet17->setCellValue('AG6', 'Contract combination');
		$sheet18->setCellValue('AL6', 'Contract Modification');
		$sheet19->setCellValue('AQ6', 'Order Reference');
		$sheet20->setCellValue('AR6', 'Contract Reference');
		$sheet21->setCellValue('AS6', 'Departement');
		$sheet22->setCellValue('AT6', 'Tibs PY atas Related Contract');

        $sheet->setCellValue('M7', 'Is there an idenfied asset?');
        $sheet->setCellValue('N7', 'Does the customer has the right to control the use of the identified asset for a period of time?');
        $sheet->setCellValue('O7', 'Contract contains a lease?');
        $sheet->setCellValue('P7', 'The parties to the contract have approved the contract and are committed to perform their respective obligations');
        $sheet->setCellValue('Q7', 'The entity can identify each partys rights regarding the goods or services to be transferred');
        $sheet->setCellValue('R7', 'The entity can identify the payment terms for the goods or services to be transferred');
        $sheet->setCellValue('S7', 'The contract has commercial substance');
        $sheet->setCellValue('T7', 'It is probable that the entity will collect substantially all of the consideration to which it will be entitled in exchange for the goods or services that will be transferred to the customer');
        $sheet->setCellValue('U7', 'CR');
        $sheet->setCellValue('V7', 'CR Reference Documents');
        $sheet->setCellValue('W7', 'Does termination clause with substantive termination penalty exist in the contract?');
        $sheet->setCellValue('X7', 'Does the customer has the unilateral right to terminate the contract?');
        $sheet->setCellValue('Y7', 'Does the cancellation option indicates the customer has a material right?');
        $sheet->setCellValue('Z7', 'Does the contract includes a notification or cancellation period?');
        $sheet->setCellValue('AA7', 'Notification period (in days)');
        $sheet->setCellValue('AB7', 'Start');
        $sheet->setCellValue('AC7', 'End');
        $sheet->setCellValue('AD7', 'Contract period');
        $sheet->setCellValue('AE7', 'Does the contract provides the customer the right to renew the contract (renewal option)?');
        $sheet->setCellValue('AF7', 'Does the right to renew the contract convey a material right?');
        $sheet->setCellValue('AG7', 'Was the contract entered into at or near the same time as other contracts with the same customer or its related parties?');
        $sheet->setCellValue('AH7', 'Do the contracts are negotiated as a package with a single commercial objective?');
        $sheet->setCellValue('AI7', 'Does the amount of consideration to be paid in one contract depends on the price or performance of the other contract?');
        $sheet->setCellValue('AJ7', 'Do the goods and services promised in the contracts are a single performance obligation?');
        $sheet->setCellValue('AK7', 'Which contracts are combined?');
        $sheet->setCellValue('AL7', 'Has the contract been modified since it was entered into or commenced?');
        $sheet->setCellValue('AM7', 'Did the modification increase the scope of the contract due to the addition of promised goods or services that are distinct and are priced at a SSP?');
        $sheet->setCellValue('AN7', 'Are the remaining goods or services in the modified contract distinct from those already provided?');
        $sheet->setCellValue('AO7', 'Conclusion for modification treatment');
        $sheet->setCellValue('AP7', 'Which contracts are modified?');



		//SN Mulai dari Row Berapa
		$sn=9;
		foreach ($productlist as $prod) {
			//echo $prod->product_name;
			$sheet->setCellValue('A'.$sn,$prod->Column2);
			$sheet->setCellValue('B'.$sn,$prod->Column3);
			$sheet->setCellValue('C'.$sn,$prod->Column4);
			$sheet->setCellValue('D'.$sn,$prod->Column5);
			$sheet->setCellValue('E'.$sn,$prod->Column6);
			$sheet->setCellValue('F'.$sn,$prod->Column7);
			$sheet->setCellValue('G'.$sn,$prod->Column8);
			$sheet->setCellValue('H'.$sn,$prod->Column9);
			$sheet->setCellValue('I'.$sn,$prod->Column10);
			$sheet->setCellValue('J'.$sn,$prod->Column11);
			$sheet->setCellValue('K'.$sn,$prod->Column12);
			$sheet->setCellValue('L'.$sn,$prod->Column13);
			$sheet->setCellValue('M'.$sn,$prod->Column14);
			$sheet->setCellValue('N'.$sn,$prod->Column15);
			$sheet->setCellValue('O'.$sn,$prod->Column16);
			$sheet->setCellValue('P'.$sn,$prod->Column17);
			$sheet->setCellValue('Q'.$sn,$prod->Column18);
			$sheet->setCellValue('R'.$sn,$prod->Column19);
			$sheet->setCellValue('S'.$sn,$prod->Column20);
			$sheet->setCellValue('T'.$sn,$prod->Column21);
			$sheet->setCellValue('U'.$sn,$prod->Column22);
			$sheet->setCellValue('V'.$sn,$prod->Column23);
			$sheet->setCellValue('W'.$sn,$prod->Column24);
			$sheet->setCellValue('X'.$sn,$prod->Column25);
			$sheet->setCellValue('Y'.$sn,$prod->Column26);
			$sheet->setCellValue('Z'.$sn,$prod->Column27);
			$sheet->setCellValue('AA'.$sn,$prod->Column28);
			$sheet->setCellValue('AB'.$sn,$prod->Column29);
			$sheet->setCellValue('AC'.$sn,$prod->Column30);
			$sheet->setCellValue('AD'.$sn,$prod->Column31);
			$sheet->setCellValue('AE'.$sn,$prod->Column32);
			$sheet->setCellValue('AF'.$sn,$prod->Column33);
			$sheet->setCellValue('AG'.$sn,$prod->Column34);
			$sheet->setCellValue('AH'.$sn,$prod->Column35);
			$sheet->setCellValue('AI'.$sn,$prod->Column36);
			$sheet->setCellValue('AJ'.$sn,$prod->Column37);
			$sheet->setCellValue('AK'.$sn,$prod->Column38);
			$sheet->setCellValue('AL'.$sn,$prod->Column39);
			$sheet->setCellValue('AM'.$sn,$prod->Column40);
			$sheet->setCellValue('AN'.$sn,$prod->Column41);
			$sheet->setCellValue('AO'.$sn,$prod->Column42);
			$sheet->setCellValue('AP'.$sn,$prod->Column43);
			$sheet->setCellValue('AQ'.$sn,$prod->Column44);
			$sheet->setCellValue('AR'.$sn,$prod->Column45);
			$sheet->setCellValue('AS'.$sn,$prod->Column46);
			$sheet->setCellValue('AT'.$sn,$prod->Column47);
			$sn++;
		}

		$spreadsheet->getActiveSheet()->setTitle('Step 1');

		//STEP 2 DATA
		$spreadsheet->createSheet();

		//fetch my data
        $productlist2=$this->home_model->review_list2();

		$spreadsheet->getDefaultStyle()->getFont()->setName('Trebuchet MS');
        $spreadsheet->setActiveSheetIndex(1)->getStyle('A6:AC7')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
        $spreadsheet->setActiveSheetIndex(1)->getStyle('A9:AC9')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');
        $spreadsheet->setActiveSheetIndex(1)->getStyle('A6:AC7')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);
        $spreadsheet->setActiveSheetIndex(1)->getStyle('A6:AC7')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->setActiveSheetIndex(1)->getStyle('A6:AC7')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->setActiveSheetIndex(1)->getStyle('A6:AC2000')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

        $styleArray = [
            'font' => [
                'bold' => true,
            ],
        ];
        $spreadsheet->setActiveSheetIndex(1)->getStyle('A6:AP8')->applyFromArray($styleArray);
        $spreadsheet->setActiveSheetIndex(1)->getStyle('A1:C4')->applyFromArray($styleArray);

        $styleArray1 = [
            'font' => [
                'size' => 10,
            ],
        ];
        $spreadsheet->setActiveSheetIndex(1)->getStyle('A1:AP5000')->applyFromArray($styleArray1);
        $spreadsheet->setActiveSheetIndex(1)->getStyle('A10:AP5000')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);

        for ($i = 'A'; $i !=  $spreadsheet->setActiveSheetIndex(1)->getHighestColumn(); $i++) {
            $spreadsheet->setActiveSheetIndex(1)->getColumnDimension($i)->setAutoSize(TRUE);
        }

		$sheet = $spreadsheet->setActiveSheetIndex(1);
		$sheet0_1 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('A1:D1');
		$sheet0_2 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('A2:C2');
		$sheet0_3 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('A3:C3');
		$sheet0_4 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('A4:C4');
		$sheet0_1->setCellValue('A1', 'Contract Review IFRS 15 / PSAK 72');
		$sheet0_2->setCellValue('A2', 'Step 2 - PO Identification');
		$sheet0_3->setCellValue('A3', 'PT Telkom Indonesia Tbk');
		$sheet0_4->setCellValue('A4', 'F. Year');

		//HEADER STEP 2
		//MERGE
		$sheet1 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('A6:A8');
		$sheet2 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('B6:B8');
		$sheet3 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('C6:C8');
		$sheet4 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('D6:D8');
		$sheet5 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('E6:J6');
		$sheet6 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('F7:I7');
		$sheet7 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('J7:J8'); 
		$sheet8 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('K6:L7');
		$sheet9 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('M6:O7');
		$sheet10 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('P6:P8');
		$sheet11 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('Q6:Q8');
		$sheet12 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('R6:R8');
		$sheet13 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('S6:X6');
		$sheet14 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('T7:T8');
		$sheet15 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('U7:W7');
		$sheet16 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('X7:X8');
		$sheet17 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('Y6:AA6');
		$sheet18 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('Y7:Y8');
		$sheet19 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('Z7:Z8');
		$sheet20 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('AA7:AA8');
		$sheet21 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('AB6:AC6');
		$sheet22 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('AB7:AB8');
		$sheet23 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('AC7:AC8');
		$sheet24 = $spreadsheet->setActiveSheetIndex(1)->mergeCells('S7:S8');


		$sheet->setCellValue('A5', '');
		$sheet->setCellValue('A6', '');
        $sheet1->setCellValue('A6', 'No ');
        $sheet2->setCellValue('B6', 'Contract Number');
        $sheet3->setCellValue('C6', 'List of promised good and services, including: 1. Free goods/services 2. Cancellation option (KK 1.1) 3. Renewal option (KK 1.1) 4. Option for addional discounted goods/services 5. Warranty');
		$sheet4->setCellValue('D6', 'lease Component?');
		$sheet5->setCellValue('E6', 'Applicable for all promised goods and services in the contract');
		$sheet6->setCellValue('F7', 'Distinct Within the Context of the Contract');
		$sheet7->setCellValue('J7', 'Separate PO/Not a separate PO');
		$sheet8->setCellValue('K6', 'Applicable for option');
		$sheet9->setCellValue('M6', 'Applicable for warranty');
		$sheet10->setCellValue('P6', 'PO Number');
		$sheet11->setCellValue('Q6', 'PO Identifier');
		$sheet12->setCellValue('R6', 'PO Description');
		$sheet13->setCellValue('S6', 'Agent principal relationship');
		$sheet14->setCellValue('T7', 'Has the Company obtain the control of the specified good or service before it is transferred to the customer?');
		$sheet15->setCellValue('U7', 'Other considerations');
		$sheet16->setCellValue('X7', 'Conclusion');
		$sheet17->setCellValue('Y6', 'KL Reference');
		$sheet18->setCellValue('Y7', 'Vendor');
		$sheet19->setCellValue('Z7', 'KL Number');
		$sheet20->setCellValue('AA7', 'KL Date');
		$sheet21->setCellValue('AB6', 'WO Reference');
		$sheet22->setCellValue('AB7', 'WO Number');
		$sheet23->setCellValue('AC7', 'WO Date');
		$sheet24->setCellValue('S7', 'Is another party involved in providing goods or services to the customer?');

		$sheet->setCellValue('E7', 'Capable of being distinct');
		$sheet->setCellValue('E8', 'The promised good or service is capable of being distinct by providing a benefit to the customer either on its own or together with other readily available resources');
		$sheet->setCellValue('F8', 'The entity provides a significant integrated service (bundle of goods or services in the contract that represent the combined output or outputs for which the customer has contracted)');
		$sheet->setCellValue('G8', 'One or more of the goods or services significantly modifies or customises, or are significantly modified or customised by, one or more of the other goods or services promised in the contract.');
		$sheet->setCellValue('H8', 'The goods or services are highly interdependent or highly interrelated (each of the goods or services is significantly affected by one or more of the other goods or services in the contract)');
		$sheet->setCellValue('I8', 'Conclusion');
		$sheet->setCellValue('K8', 'Does the option convey a material right?');
		$sheet->setCellValue('L8', 'PO/Not a PO');
		$sheet->setCellValue('M8', 'Does the customer have the option to purchase the warranty separately?');
		$sheet->setCellValue('U8', 'Is the Company primarily responsible for fulfilling the promise to provide the goods or services to the customer?');
		$sheet->setCellValue('N8', 'Does the promised warrantyprovide the customer with a service in addition to the assurance that the product complied agreed-upon specifications?');
		$sheet->setCellValue('O8', 'Service warranty (PO)/Assurance warranty (Not a PO)');
		$sheet->setCellValue('V8', 'Does the Company have inventory risk?');
		$sheet->setCellValue('W8', 'Does the Company have discretion in establishing price?');


				//SN Mulai dari Row Berapa
				$sn=10;
				foreach ($productlist2 as $prod) {
					//echo $prod->product_name;
                    $sheet->setCellValue('A'.$sn,$prod->Column2_2);
                    $sheet->setCellValue('B'.$sn,$prod->Column2_3);
                    $sheet->setCellValue('C'.$sn,$prod->Column2_4);
                    $sheet->setCellValue('D'.$sn,$prod->Column2_5);
                    $sheet->setCellValue('E'.$sn,$prod->Column2_6);
                    $sheet->setCellValue('F'.$sn,$prod->Column2_7);
                    $sheet->setCellValue('G'.$sn,$prod->Column2_8);
                    $sheet->setCellValue('H'.$sn,$prod->Column2_9);
                    $sheet->setCellValue('I'.$sn,$prod->Column2_10);
                    $sheet->setCellValue('J'.$sn,$prod->Column2_11);
                    $sheet->setCellValue('K'.$sn,$prod->Column2_12);
                    $sheet->setCellValue('L'.$sn,$prod->Column2_13);
                    $sheet->setCellValue('M'.$sn,$prod->Column2_14);
                    $sheet->setCellValue('N'.$sn,$prod->Column2_15);
                    $sheet->setCellValue('O'.$sn,$prod->Column2_16);
                    $sheet->setCellValue('P'.$sn,$prod->Column2_17);
                    $sheet->setCellValue('Q'.$sn,$prod->Column2_18);
                    $sheet->setCellValue('R'.$sn,$prod->Column2_19);
                    $sheet->setCellValue('S'.$sn,$prod->Column2_20);
                    $sheet->setCellValue('T'.$sn,$prod->Column2_21);
                    $sheet->setCellValue('U'.$sn,$prod->Column2_22);
                    $sheet->setCellValue('V'.$sn,$prod->Column2_23);
                    $sheet->setCellValue('W'.$sn,$prod->Column2_24);
                    $sheet->setCellValue('X'.$sn,$prod->Column2_25);
                    $sheet->setCellValue('Y'.$sn,$prod->Column2_26);
                    $sheet->setCellValue('Z'.$sn,$prod->Column2_27);
                    $sheet->setCellValue('AA'.$sn,$prod->Column2_28);
                    $sheet->setCellValue('AB'.$sn,$prod->Column2_29);
                    $sheet->setCellValue('AC'.$sn,$prod->Column2_30);
					$sn++;
				}
		
		$spreadsheet->getActiveSheet()->setTitle('Step 2');

		//STEP 3 DATA
		$spreadsheet->createSheet();

		//fetch my data
        $productlist3=$this->home_model->review_list3();

        $spreadsheet->getDefaultStyle()->getFont()->setName('Trebuchet MS');
        $spreadsheet->setActiveSheetIndex(2)->getStyle('A6:AJ7')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
        $spreadsheet->setActiveSheetIndex(2)->getStyle('A9:AJ9')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');
        $spreadsheet->setActiveSheetIndex(2)->getStyle('A6:AJ7')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);
        $spreadsheet->setActiveSheetIndex(2)->getStyle('A6:AJ7')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->setActiveSheetIndex(2)->getStyle('A6:AJ7')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->setActiveSheetIndex(2)->getStyle('A6:AJ2000')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

        $styleArray = [
            'font' => [
                'bold' => true,
            ],
        ];
        $spreadsheet->setActiveSheetIndex(2)->getStyle('A6:AP8')->applyFromArray($styleArray);
        $spreadsheet->setActiveSheetIndex(2)->getStyle('A1:C4')->applyFromArray($styleArray);

        $styleArray1 = [
            'font' => [
                'size' => 10,
            ],
        ];
        $spreadsheet->setActiveSheetIndex(2)->getStyle('A1:AJ5000')->applyFromArray($styleArray1);
        $spreadsheet->setActiveSheetIndex(2)->getStyle('A9:AJ5000')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);

        for ($i = 'A'; $i !=  $spreadsheet->setActiveSheetIndex(2)->getHighestColumn(); $i++) {
            $spreadsheet->setActiveSheetIndex(2)->getColumnDimension($i)->setAutoSize(TRUE);
        }

		$sheet = $spreadsheet->setActiveSheetIndex(2);
		$sheet0_1 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('A1:D1');
		$sheet0_2 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('A2:C2');
		$sheet0_3 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('A3:C3');
		$sheet0_4 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('A4:C4');
		$sheet0_1->setCellValue('A1', 'Contract Review IFRS 15 / PSAK 72');
		$sheet0_2->setCellValue('A2', 'Step 3 - Determine');
		$sheet0_3->setCellValue('A3', 'PT Telkom Indonesia Tbk');
		$sheet0_4->setCellValue('A4', 'F. Year');

		//HEADER STEP 3
		//MERGE
		$sheet1 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('A6:A8');
		$sheet2 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('B6:B8');
		$sheet3 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('C6:G6');
		$sheet4 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('C7:C8');
		$sheet5 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('D7:D8');
		$sheet6 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('E7:E8');
		$sheet7 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('F7:F8');
		$sheet8 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('G7:G8');
		$sheet9 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('H6:L6');
		$sheet10 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('H7:H8');
		$sheet11 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('I7:I8');
		$sheet12 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('J7:K7');
		$sheet13 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('L7:L8');
		$sheet14 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('M6:R6');
		$sheet15 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('M7:M8');
		$sheet16 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('N7:N8');
		$sheet17 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('O7:O8');
		$sheet18 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('P7:P8');
		$sheet19 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('Q7:Q8');
		$sheet20 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('R7:R8');
		$sheet21 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('S6:Y6');
		$sheet22 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('S7:S8');
		$sheet23 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('T7:T8');
		$sheet24 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('U7:U8');
		$sheet25 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('V7:V8');
		$sheet26 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('W7:W8');
		$sheet27 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('X7:X8');
		$sheet28 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('Y7:Y8');
		$sheet29 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('Z6:Z8');
		$sheet30 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('AA6:AH6');
		$sheet31 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('AA7:AA8');
		$sheet32 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('AB7:AB8');
		$sheet33 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('AC7:AC8');
		$sheet34 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('AD7:AD8');
		$sheet35 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('AE7:AE8');
		$sheet36 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('AF7:AF8');
		$sheet37 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('AG7:AG8');
		$sheet38 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('AH7:AH8');
		$sheet39 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('AI6:AI8');
		$sheet40 = $spreadsheet->setActiveSheetIndex(2)->mergeCells('AJ6:AJ8');

		$sheet->setCellValue('A5', '');
		$sheet->setCellValue('A6', '');
        $sheet1->setCellValue('A6', 'No ');
        $sheet2->setCellValue('B6', 'Contract Number');
		$sheet3->setCellValue('C6', 'Same information with Step 2');
		$sheet4->setCellValue('C7', 'List of promised good and services, including:	1. Free goods/services 3. Renewal option (KK 1.1) 4. Option for addional discounted goods/servicesv 5. Warranty');
		$sheet5->setCellValue('D7', 'PO Number');
		$sheet6->setCellValue('E7', 'PO Identifier');
		$sheet7->setCellValue('F7', 'PO Description');
		$sheet8->setCellValue('G7', 'Agent Principal Conclusion');
		$sheet9->setCellValue('H6', 'Fixed Consideration');
		$sheet10->setCellValue('H7', 'Quantity');
		$sheet11->setCellValue('I7', 'Period');
		$sheet12->setCellValue('J7', 'PRICE');
		$sheet13->setCellValue('L7', 'Total Fixed Consideration');
		$sheet14->setCellValue('M6', 'Variable consideration - Revenue Sharing (Expected Value)');
		$sheet15->setCellValue('M7', '% of revenue sharing (as determined in the contract)');
		$sheet16->setCellValue('N7', 'Estimationof base for revenue sharing');
		$sheet17->setCellValue('O7', 'Total Variable Consideration');
		$sheet18->setCellValue('P7', 'Does the Company applies the constraint?');
		$sheet19->setCellValue('Q7', 'Total Variable Consideration after applying constraint');
		$sheet20->setCellValue('R7', 'Reference used to estimate the variable consideration');
		$sheet21->setCellValue('S6', 'Variable consideration - Usage based (Expected Value)');
		$sheet22->setCellValue('S7', 'Estimation of usage or quantities');
		$sheet23->setCellValue('T7', 'Price/ Quantity/ Unit (as determined in the contract)');
		$sheet24->setCellValue('U7', 'Total Variable Consideration');
		$sheet25->setCellValue('V7', 'Estimation method');
		$sheet26->setCellValue('W7', 'Does the Company applies the constraint?');
		$sheet27->setCellValue('X7', 'Total Variable Consideration after applying constraint');
		$sheet28->setCellValue('Y7', 'Reference used to estimate the variable consideration');
		$sheet29->setCellValue('Z6', 'Total Consideration / Transaction Price');
		$sheet30->setCellValue('AA6', 'Significant Financing Component');
		$sheet31->setCellValue('AA7', 'Does the receipt of the consideration match the timing of the transfer of goods or services to the customer?');
		$sheet32->setCellValue('AB7', 'Does the timing of payments specified in the contract provides the customer or the entity with a significant benefit of financing?');
		$sheet33->setCellValue('AC7', 'Does the contract contains a significant financing component');
		$sheet34->setCellValue('AD7', 'Is the period between the customer payment and the transfer of goods or services to be one year or less?');
		$sheet35->setCellValue('AE7', 'Period between the customer payment and the transfer of goods or services (number of periods)');
		$sheet36->setCellValue('AF7', 'Payment+AE5+AF7');
		$sheet37->setCellValue('AG7', 'Payment in advance or Payment in arrears');
		$sheet38->setCellValue('AH7', 'Discount rate at contract inception');
		$sheet39->setCellValue('AI6', 'Transaction Price');
		$sheet40->setCellValue('AJ6', 'Magnitude of significant financing component');

		$sheet->setCellValue('J8', 'OTC / QTY');
		$sheet->setCellValue('K8', 'Price/ QTY/ PERIOD (MRC)');



				//SN Mulai dari Row Berapa
				$sn=10;
				foreach ($productlist3 as $prod) {
					//echo $prod->product_name;
                    $sheet->setCellValue('A'.$sn,$prod->Column3_2);
                    $sheet->setCellValue('B'.$sn,$prod->Column3_3);
                    $sheet->setCellValue('C'.$sn,$prod->Column3_4);
                    $sheet->setCellValue('D'.$sn,$prod->Column3_5);
                    $sheet->setCellValue('E'.$sn,$prod->Column3_6);
                    $sheet->setCellValue('F'.$sn,$prod->Column3_7);
                    $sheet->setCellValue('G'.$sn,$prod->Column3_8);
                    $sheet->setCellValue('H'.$sn,$prod->Column3_9);
                    $sheet->setCellValue('I'.$sn,$prod->Column3_10);
                    $sheet->setCellValue('J'.$sn,$prod->Column3_11);
                    $sheet->setCellValue('K'.$sn,$prod->Column3_12);
                    $sheet->setCellValue('L'.$sn,$prod->Column3_13);
                    $sheet->setCellValue('M'.$sn,$prod->Column3_14);
                    $sheet->setCellValue('N'.$sn,$prod->Column3_15);
                    $sheet->setCellValue('O'.$sn,$prod->Column3_16);
                    $sheet->setCellValue('P'.$sn,$prod->Column3_17);
                    $sheet->setCellValue('Q'.$sn,$prod->Column3_18);
                    $sheet->setCellValue('R'.$sn,$prod->Column3_19);
                    $sheet->setCellValue('S'.$sn,$prod->Column3_20);
                    $sheet->setCellValue('T'.$sn,$prod->Column3_21);
                    $sheet->setCellValue('U'.$sn,$prod->Column3_22);
                    $sheet->setCellValue('V'.$sn,$prod->Column3_23);
                    $sheet->setCellValue('W'.$sn,$prod->Column3_24);
                    $sheet->setCellValue('X'.$sn,$prod->Column3_25);
                    $sheet->setCellValue('Y'.$sn,$prod->Column3_26);
                    $sheet->setCellValue('Z'.$sn,$prod->Column3_27);
                    $sheet->setCellValue('AA'.$sn,$prod->Column3_28);
                    $sheet->setCellValue('AB'.$sn,$prod->Column3_29);
                    $sheet->setCellValue('AC'.$sn,$prod->Column3_30);
                    $sheet->setCellValue('AD'.$sn,$prod->Column3_31);
                    $sheet->setCellValue('AE'.$sn,$prod->Column3_32);
                    $sheet->setCellValue('AF'.$sn,$prod->Column3_33);
                    $sheet->setCellValue('AG'.$sn,$prod->Column3_34);
                    $sheet->setCellValue('AH'.$sn,$prod->Column3_35);
                    $sheet->setCellValue('AI'.$sn,$prod->Column3_36);
                    $sheet->setCellValue('AJ'.$sn,$prod->Column3_37);
					$sn++;
				}
		
		$spreadsheet->getActiveSheet()->setTitle('Step 3');
		
		//STEP 4 DATA
		$spreadsheet->createSheet();

		//fetch my data
		$productlist4=$this->home_model->review_list4();

		$spreadsheet->getDefaultStyle()->getFont()->setName('Trebuchet MS');
		$spreadsheet->setActiveSheetIndex(3)->getStyle('A6:S7')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
		$spreadsheet->setActiveSheetIndex(3)->getStyle('T6:T2000')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('000000');
		$spreadsheet->setActiveSheetIndex(3)->getStyle('U6:AE7')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');

		$spreadsheet->setActiveSheetIndex(3)->getStyle('A8:S8')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');
		$spreadsheet->setActiveSheetIndex(3)->getStyle('U8:AD8')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');

		$spreadsheet->setActiveSheetIndex(3)->getStyle('A6:AD7')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);
		$spreadsheet->setActiveSheetIndex(3)->getStyle('A6:AD7')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
		$spreadsheet->setActiveSheetIndex(3)->getStyle('A6:AD7')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
		$spreadsheet->setActiveSheetIndex(3)->getStyle('A6:AE2000')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

		$styleArray = [
			'font' => [
				'bold' => true,
			],
		];
		$spreadsheet->setActiveSheetIndex(3)->getStyle('A6:AP8')->applyFromArray($styleArray);
		$spreadsheet->setActiveSheetIndex(3)->getStyle('A1:C4')->applyFromArray($styleArray);

		$styleArray1 = [
			'font' => [
				'size' => 10,
			],
		];
		$spreadsheet->setActiveSheetIndex(3)->getStyle('A1:AJ5000')->applyFromArray($styleArray1);
		$spreadsheet->setActiveSheetIndex(3)->getStyle('A9:AJ5000')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);

		for ($i = 'A'; $i !=  $spreadsheet->setActiveSheetIndex(3)->getHighestColumn(); $i++) {
			$spreadsheet->setActiveSheetIndex(3)->getColumnDimension($i)->setAutoSize(TRUE);
		}

		$sheet = $spreadsheet->setActiveSheetIndex(3);
		$sheet0_1 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('A1:D1');
		$sheet0_2 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('A2:C2');
		$sheet0_3 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('A3:C3');
		$sheet0_4 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('A4:C4');
		$sheet0_1->setCellValue('A1', 'Contract Review IFRS 15 / PSAK 72');
		$sheet0_2->setCellValue('A2', 'Step 4 - TP Allocation');
		$sheet0_3->setCellValue('A3', 'PT Telkom Indonesia Tbk');
		$sheet0_4->setCellValue('A4', 'F. Year');

		//HEADER STEP 4
		//MERGE
		$sheet1 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('A6:A7');
		$sheet2 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('B6:B7');
		$sheet3 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('C6:E6');
		$sheet4 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('F6:F7');
		$sheet5 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('G6:G7');
		$sheet6 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('H6:H7');
		$sheet7 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('I6:I7');
		$sheet8 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('J6:J7');
		$sheet9 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('K6:K7');
		$sheet10 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('L6:L7');
		$sheet11 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('M6:M7');
		$sheet12 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('N6:N7');
		$sheet13 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('O6:O7');
		$sheet14 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('P6:P7');
		$sheet15 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('Q6:Q7');
		$sheet16 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('R6:R7');
		$sheet17 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('S6:S7');
		$sheet18 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('T6:T7');
		$sheet19 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('U6:U7');
		$sheet20 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('V6:V7');
		$sheet21 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('W6:W7');
		$sheet22 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('X6:Z6');
		$sheet23 = $spreadsheet->setActiveSheetIndex(3)->mergeCells('AA6:AE6');

		$sheet->setCellValue('A5', '');
		$sheet->setCellValue('A6', '');
		$sheet1->setCellValue('A6', 'No ');
		$sheet2->setCellValue('B6', 'Contract Number');
		$sheet3->setCellValue('C6', 'Same information with Step 2');
		$sheet4->setCellValue('F6', 'Quantity');
		$sheet5->setCellValue('G6', 'Period');
		$sheet6->setCellValue('H6', 'Transaction Price');
		$sheet7->setCellValue('I6', 'Cost');
		$sheet8->setCellValue('J6', 'Stand alone selling price');
		$sheet9->setCellValue('K6', 'Basis to determine SSP');
		$sheet10->setCellValue('L6', 'Allocation all discounts');
		$sheet11->setCellValue('M6', 'Allocation of attributable discount');
		$sheet12->setCellValue('N6', 'Price Allocation (after discount)');
		$sheet13->setCellValue('O6', 'Allocation of attributable variable consideration');
		$sheet14->setCellValue('P6', 'Price Allocation (after discount & variable consideration)');
		$sheet15->setCellValue('Q6', 'Price allocation per quantity');
		$sheet16->setCellValue('R6', 'Control balance');
		$sheet17->setCellValue('S6', 'Kesimpulan');
		$sheet18->setCellValue('T6', '');
		$sheet19->setCellValue('U6', 'Agent Principal Conclusion');
		$sheet20->setCellValue('V6', 'CI|GL Account');
		$sheet21->setCellValue('W6', 'GL Account');
		$sheet22->setCellValue('X6', 'Adjustment Component - Cost Estimation');
		$sheet23->setCellValue('AA6', 'Control Point - Cost Estimation');

		$sheet->setCellValue('C7', 'PO Number');
		$sheet->setCellValue('D7', 'PO Identifier');
		$sheet->setCellValue('E7', 'PO Description');
		$sheet->setCellValue('X7', 'Recognised revenue Q3');
		$sheet->setCellValue('Y7', 'Proportion Revenue to Allocated TP');
		$sheet->setCellValue('Z7', 'Estimated cost Q3');
		$sheet->setCellValue('AA7', 'Transaction Price as Principal');
		$sheet->setCellValue('AB7', 'Price Allocation as Principal');
		$sheet->setCellValue('AC7', 'Price Allocation per Quantity as Principal');
		$sheet->setCellValue('AD7', 'Revenue as Principal Q1-Q4');
		$sheet->setCellValue('AE7', 'Diff');



				//SN Mulai dari Row Berapa
				$sn=9;
				foreach ($productlist4 as $prod) {
					//echo $prod->product_name;
					$sheet->setCellValue('A'.$sn,$prod->Column4_2);
					$sheet->setCellValue('B'.$sn,$prod->Column4_3);
					$sheet->setCellValue('C'.$sn,$prod->Column4_4);
					$sheet->setCellValue('D'.$sn,$prod->Column4_5);
					$sheet->setCellValue('E'.$sn,$prod->Column4_6);
					$sheet->setCellValue('F'.$sn,$prod->Column4_7);
					$sheet->setCellValue('G'.$sn,$prod->Column4_8);
					$sheet->setCellValue('H'.$sn,$prod->Column4_9);
					$sheet->setCellValue('I'.$sn,$prod->Column4_10);
					$sheet->setCellValue('J'.$sn,$prod->Column4_11);
					$sheet->setCellValue('K'.$sn,$prod->Column4_12);
					$sheet->setCellValue('L'.$sn,$prod->Column4_13);
					$sheet->setCellValue('M'.$sn,$prod->Column4_14);
					$sheet->setCellValue('N'.$sn,$prod->Column4_15);
					$sheet->setCellValue('O'.$sn,$prod->Column4_16);
					$sheet->setCellValue('P'.$sn,$prod->Column4_17);
					$sheet->setCellValue('Q'.$sn,$prod->Column4_18);
					$sheet->setCellValue('R'.$sn,$prod->Column4_19);
					$sheet->setCellValue('S'.$sn,$prod->Column4_20);
					$sheet->setCellValue('T'.$sn,' ');
					$sheet->setCellValue('U'.$sn,$prod->Column4_22);
					$sheet->setCellValue('V'.$sn,$prod->Column4_23);
					$sheet->setCellValue('W'.$sn,$prod->Column4_24);
					$sheet->setCellValue('X'.$sn,$prod->Column4_25);
					$sheet->setCellValue('Y'.$sn,$prod->Column4_26);
					$sheet->setCellValue('Z'.$sn,$prod->Column4_27);
					$sheet->setCellValue('AA'.$sn,$prod->Column4_29);
					$sheet->setCellValue('AB'.$sn,$prod->Column4_30);
					$sheet->setCellValue('AC'.$sn,$prod->Column4_31);
					$sheet->setCellValue('AD'.$sn,$prod->Column4_32);
					$sheet->setCellValue('AE'.$sn,$prod->Column4_33);
					$sn++;
				}

		$spreadsheet->getActiveSheet()->setTitle('Step 4');

				
		//STEP 5 DATA
		$spreadsheet->createSheet();
		
		//fetch my data
		$productlist5=$this->home_model->review_list5();

		$spreadsheet->getDefaultStyle()->getFont()->setName('Trebuchet MS');
		//A - AM Warna Kuning dan blok hitam
		$spreadsheet->setActiveSheetIndex(4)->getStyle('A6:AJ7')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
		$spreadsheet->setActiveSheetIndex(4)->getStyle('AK6:AK2000')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('000000');
		
		//AO - BE Warna Kuning dan blok hitam
		$spreadsheet->setActiveSheetIndex(4)->getStyle('AL6:BB7')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
		$spreadsheet->setActiveSheetIndex(4)->getStyle('BC6:BC2000')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('000000');

		//BG - BW Warna Kuning dan Blok Hitam
		$spreadsheet->setActiveSheetIndex(4)->getStyle('BD6:BT7')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
		$spreadsheet->setActiveSheetIndex(4)->getStyle('BU6:BU2000')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('000000');
		//BY - CC Warna Kuning dan Blok Hitam
		$spreadsheet->setActiveSheetIndex(4)->getStyle('BV5:BY7')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
		$spreadsheet->setActiveSheetIndex(4)->getStyle('BZ5:BZ2000')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('000000');
		
		$spreadsheet->setActiveSheetIndex(4)->getStyle('CA5:CF7')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');

		// Kosong
		$spreadsheet->setActiveSheetIndex(4)->getStyle('A8:AJ8')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');
		$spreadsheet->setActiveSheetIndex(4)->getStyle('AL8:BB8')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');
		$spreadsheet->setActiveSheetIndex(4)->getStyle('BD8:BT8')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');
		$spreadsheet->setActiveSheetIndex(4)->getStyle('BV8:BY8')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');
		$spreadsheet->setActiveSheetIndex(4)->getStyle('CA8:CF8')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');

		$spreadsheet->setActiveSheetIndex(4)->getStyle('A6:CG7')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);
		$spreadsheet->setActiveSheetIndex(4)->getStyle('A6:CF7')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
		$spreadsheet->setActiveSheetIndex(4)->getStyle('A6:CF7')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);

		$spreadsheet->setActiveSheetIndex(4)->getStyle('A6:BU2000')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
		$spreadsheet->setActiveSheetIndex(4)->getStyle('BV5:CF2000')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

		$styleArray = [
			'font' => [
				'bold' => true,
			],
		];
		$spreadsheet->setActiveSheetIndex(4)->getStyle('A5:CY8')->applyFromArray($styleArray);
		$spreadsheet->setActiveSheetIndex(4)->getStyle('A1:C4')->applyFromArray($styleArray);

		$styleArray1 = [
			'font' => [
				'size' => 10,
			],
		];
		$spreadsheet->setActiveSheetIndex(4)->getStyle('A1:CY2000')->applyFromArray($styleArray1);
		$spreadsheet->setActiveSheetIndex(4)->getStyle('A9:CY2000')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);

		for ($i = 'A'; $i !=  $spreadsheet->setActiveSheetIndex(4)->getHighestColumn(); $i++) {
			$spreadsheet->setActiveSheetIndex(4)->getColumnDimension($i)->setAutoSize(TRUE);
		}

		$sheet = $spreadsheet->setActiveSheetIndex(4);
		$sheet0_1 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('A1:D1');
		$sheet0_2 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('A2:C2');
		$sheet0_3 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('A3:C3');
		$sheet0_4 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('A4:C4');
		$sheet0_1->setCellValue('A1', 'Contract Review IFRS 15 / PSAK 72');
		$sheet0_2->setCellValue('A2', 'Step 5 - Revenue Recognition');
		$sheet0_3->setCellValue('A3', 'PT Telkom Indonesia Tbk');
		$sheet0_4->setCellValue('A4', 'F. Year');

		//HEADER STEP 5
		//MERGE
		$sheet1 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('A6:A7');
		$sheet2 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('B6:B7');
		$sheet3 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('C6:E6');
		$sheet4 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('F6:I6');
		$sheet5 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('M6:N6');
		$sheet6 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('R6:V6');
		$sheet7 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('W6:AA6');
		$sheet8 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('AB6:AF6');
		/*$sheet9 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('AI6:AI7');
		$sheet10 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('AJ6:AJ7');*/
		$sheet11 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('AI6:AJ6');
		/*$sheet12 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('AM6:AM7');*/
		$sheet13 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('AK6:AK7');
		$sheet14 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('AL6:AO6');
		$sheet15 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('AP6:AS6');
		$sheet16 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('AT6:AW6');
		$sheet17 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('AX6:BA6');
		$sheet18 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BB6:BB7');
		$sheet19 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BC6:BC7');
		$sheet20 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BD6:BF6');
		$sheet21 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BG6:BG7');
		$sheet22 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BH6:BJ6');
		$sheet23 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BK6:BK7');
		$sheet24 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BL6:BN6');
		$sheet25 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BO6:BO7');
		$sheet26 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BP6:BR6');
		$sheet27 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BS6:BS7');
		$sheet28 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BT6:BT7');
		$sheet29 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BU6:BU7');
		$sheet30 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BV5:BY5');
		$sheet31 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BV6:BV7');
		$sheet32 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BW6:BW7');
		$sheet33 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BX6:BX7');
		$sheet34 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BY6:BY7');
		$sheet35 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('BZ5:BZ7');
		$sheet36 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('CA5:CF5');
		$sheet37 = $spreadsheet->setActiveSheetIndex(4)->mergeCells('CA6:CF6');


		$sheet->setCellValue('A5', '');
		$sheet->setCellValue('A6', '');
		$sheet1->setCellValue('A6', 'No ');
		$sheet2->setCellValue('B6', 'Contract Number');
		$sheet3->setCellValue('C6', 'Same information with Step 2');
		$sheet4->setCellValue('F6', 'Timing of revenue recognition');
		$sheet5->setCellValue('F6', 'Applicable for input method');
		$sheet6->setCellValue('R6', 'Reference');
		$sheet7->setCellValue('W6', 'Analisis Dokumen Pendukung Revenue Assurance');
		$sheet8->setCellValue('AB6', 'Analisis Dokumen Serah Terima Telkom-Pelanggan');
		/*$sheet9->setCellValue('AI6', 'Apakah terdapat dokumen yang menyebutkan layanan berlaku sampai dengan periode setelah kontrak (misalnya disebutkan pada BASO/BAST bahwa layanan aktif sampai dengan xxx) ?');
		$sheet10->setCellValue('AJ6', 'Populasi Kuartal');*/
		$sheet11->setCellValue('AI6', 'Based on system');
		/*$sheet12->setCellValue('AM6', 'Identified as late billing complete');*/
		$sheet13->setCellValue('AK6', '');
		$sheet14->setCellValue('AL6', 'Q1 (Jan-Mar)');
		$sheet15->setCellValue('AP6', 'Q2 (Apr-Jun)');
		$sheet16->setCellValue('AT6', 'Q3 (Jul-Sept)');
		$sheet17->setCellValue('AX6', 'Q4 (Oct-Dec)');
		$sheet18->setCellValue('BB6', 'Total Period Satisfied Q1-Q4');
		$sheet19->setCellValue('BC6', '');
		$sheet20->setCellValue('BD6', 'Recognised revenue Q1 (Jan-Mar)');
		$sheet21->setCellValue('BG6', 'Recognised revenue Q1');
		$sheet22->setCellValue('BH6', 'Recognised revenue Q2 (Apr-Jun)');
		$sheet23->setCellValue('BK6', 'Recognised revenue Q2');
		$sheet24->setCellValue('BL6', 'Recognised revenue Q3 (Jul-Sep)');
		$sheet25->setCellValue('BO6', 'Recognised revenue Q3');
		$sheet26->setCellValue('BP6', 'Recognised revenue Q4 (Oct-Dec)');
		$sheet27->setCellValue('BS6', 'Recognised revenue Q4');
		$sheet28->setCellValue('BT6', 'Total Recognised revenue (Q1 - Q4)');
		$sheet29->setCellValue('BU6', '');
		$sheet30->setCellValue('BV5', 'SORODO Assessment');
		$sheet31->setCellValue('BV6', 'SID (Trim)');
		$sheet32->setCellValue('BW6', 'Order Number');
		$sheet33->setCellValue('BX6', 'SID|Order');
		$sheet34->setCellValue('BY6', 'SID|Order Sequence');
		$sheet35->setCellValue('BZ5', '');
		$sheet36->setCellValue('CA5', 'SORODO Assessment');
		$sheet37->setCellValue('CA6', 'Period Satisfied Assessment after SORODO Assessment');

		$sheet->setCellValue('C7', 'PO Number');
		$sheet->setCellValue('D7', 'PO Identifier');
		$sheet->setCellValue('E7', 'PO Description');
		$sheet->setCellValue('F7', 'The customer simultaneously receives and consumes the benefits provided by the entitys performance as the entity performs');
		$sheet->setCellValue('G7', 'The entitys performance creates or enhances an asset that the customer controls as the asset is created or enhanced');
		$sheet->setCellValue('H7', 'The entitys performance does not create an asset with an alternative use to the entity, and the entity has an enforceable right to payment for performance completed to date');
		$sheet->setCellValue('I7', 'Transfer of control');
		$sheet->setCellValue('J6', '');
		$sheet->setCellValue('K6', '');
		$sheet->setCellValue('J7', 'Measurement method to use (only applicable for over time)');
		$sheet->setCellValue('K7', 'Unit to use');
		$sheet->setCellValue('L6', 'Applicable for Point in Time');
		$sheet->setCellValue('L7', 'Unit transferred to customer (Quantity)');
		$sheet->setCellValue('M7', 'Cost incurred');
		$sheet->setCellValue('N7', 'Total expected cost');
		$sheet->setCellValue('O6', 'Applicable for output method');
		$sheet->setCellValue('O7', 'Unit transferred to customer');
		$sheet->setCellValue('P6', '');
		$sheet->setCellValue('P6', '');
		$sheet->setCellValue('Q6', '');
		$sheet->setCellValue('P7', 'Allocated TP');
		$sheet->setCellValue('Q7', 'Allocated TP per quantity per period');
		$sheet->setCellValue('R7', 'Order Number');
		$sheet->setCellValue('S7', 'SID');
		$sheet->setCellValue('T7', 'Product ID');
		$sheet->setCellValue('U7', 'BAST Date');
		$sheet->setCellValue('V7', 'BAST Number');
		$sheet->setCellValue('W7', 'Dokumen Pendukung Revenue Assurance');
		$sheet->setCellValue('X7', 'Nomor Dokumen Revenue Assurance');
		$sheet->setCellValue('Y7', 'Tanggal Dokumen Pendukung Revenue Assurance');
		$sheet->setCellValue('Z7', 'Tanggal Aktivasi');
		$sheet->setCellValue('AA7', 'Tanggal Billing');
		$sheet->setCellValue('AB7', 'Dokumen Serah Terima');
		$sheet->setCellValue('AC7', 'Nomor Dokumen Serah Terima');
		$sheet->setCellValue('AD7', 'Produk yang Diserahkan');
		$sheet->setCellValue('AE7', 'Jumlah Produk yang Diserahkan (Unit/Percentage/IDR)');
		$sheet->setCellValue('AF7', 'Tanggal Dokumen Serah Terima');
		$sheet->setCellValue('AG7', 'Tanggal Serah Terima');
		$sheet->setCellValue('AH6', '');
		$sheet->setCellValue('AH7', 'Kesimpulan Periode Pengakuan Pendapatan');
		$sheet->setCellValue('AI7', 'Billdate');
		$sheet->setCellValue('AJ7', 'Billcomp');
		$sheet->setCellValue('AL7', ' Jan ');
		$sheet->setCellValue('AM7', ' Feb ');
		$sheet->setCellValue('AN7', ' Mar ');
		$sheet->setCellValue('AO7', 'Total Period Satisfied Q1');
		$sheet->setCellValue('AP7', ' Jan ');
		$sheet->setCellValue('AQ7', ' May ');
		$sheet->setCellValue('AR7', ' Jun ');
		$sheet->setCellValue('AS7', 'Total Period Satisfied Q2');
		$sheet->setCellValue('AT7', ' Jul ');
		$sheet->setCellValue('AU7', ' Aug ');
		$sheet->setCellValue('AV7', ' Sep ');
		$sheet->setCellValue('AW7', 'Total Period Satisfied Q3');
		$sheet->setCellValue('AX7', ' Oct ');
		$sheet->setCellValue('AY7', ' Nov ');
		$sheet->setCellValue('AZ7', ' Dec ');
		$sheet->setCellValue('BA7', 'Total Period Satisfied Q4');
		$sheet->setCellValue('BD7', ' Jan ');
		$sheet->setCellValue('BE7', ' Feb ');
		$sheet->setCellValue('BF7', ' Mar ');
		$sheet->setCellValue('BH7', ' Apr ');
		$sheet->setCellValue('BI7', ' May ');
		$sheet->setCellValue('BJ6', ' Jun ');
		$sheet->setCellValue('BL7', ' JuL ');
		$sheet->setCellValue('BM7', ' Aug ');
		$sheet->setCellValue('BN7', ' Sep ');
		$sheet->setCellValue('BP7', ' Oct ');
		$sheet->setCellValue('BQ7', ' Nov ');
		$sheet->setCellValue('BR7', ' Dec ');
		$sheet->setCellValue('CA7', 'Total Period Satisfied Q1');
		$sheet->setCellValue('CB7', 'Total Period Satisfied Q2');
		$sheet->setCellValue('CC7', 'Total Period Satisfied Q3');
		$sheet->setCellValue('CD7', 'Total Period Satisfied Q4');
		$sheet->setCellValue('CE7', 'Total Period Satisfied Q1-Q4');
		$sheet->setCellValue('CF7', 'Impact SORODO Assessment');

		//SN Mulai dari Row Berapa
		$sn=9;
		foreach ($productlist5 as $prod) {
			//echo $prod->product_name;
			$sheet->setCellValue('A'.$sn,$prod->Column5_2);
            $sheet->setCellValue('B'.$sn,$prod->Column5_3);
            $sheet->setCellValue('C'.$sn,$prod->Column5_4);
            $sheet->setCellValue('D'.$sn,$prod->Column5_5);
            $sheet->setCellValue('E'.$sn,$prod->Column5_6);
            $sheet->setCellValue('F'.$sn,$prod->Column5_7);
            $sheet->setCellValue('G'.$sn,$prod->Column5_8);
            $sheet->setCellValue('H'.$sn,$prod->Column5_9);
            $sheet->setCellValue('I'.$sn,$prod->Column5_10);
            $sheet->setCellValue('J'.$sn,$prod->Column5_11);
            $sheet->setCellValue('K'.$sn,$prod->Column5_12);
            $sheet->setCellValue('L'.$sn,$prod->Column5_13);
            $sheet->setCellValue('M'.$sn,$prod->Column5_14);
            $sheet->setCellValue('N'.$sn,$prod->Column5_15);
            $sheet->setCellValue('O'.$sn,$prod->Column5_16);
            $sheet->setCellValue('P'.$sn,$prod->Column5_17);
            $sheet->setCellValue('Q'.$sn,$prod->Column5_18);
            $sheet->setCellValue('R'.$sn,$prod->Column5_19);
            $sheet->setCellValue('S'.$sn,$prod->Column5_20);
            $sheet->setCellValue('T'.$sn,$prod->Column5_21);
            $sheet->setCellValue('U'.$sn,$prod->Column5_22);
            $sheet->setCellValue('V'.$sn,$prod->Column5_23);
            $sheet->setCellValue('W'.$sn,$prod->Column5_24);
            $sheet->setCellValue('X'.$sn,$prod->Column5_25);
            $sheet->setCellValue('Y'.$sn,$prod->Column5_26);
            $sheet->setCellValue('Z'.$sn,$prod->Column5_27);
            $sheet->setCellValue('AA'.$sn,$prod->Column5_28);
            $sheet->setCellValue('AB'.$sn,$prod->Column5_29);
            $sheet->setCellValue('AC'.$sn,$prod->Column5_30);
            $sheet->setCellValue('AD'.$sn,$prod->Column5_31);
			$sheet->setCellValue('AE'.$sn,$prod->Column5_32);
            $sheet->setCellValue('AF'.$sn,$prod->Column5_33);
            $sheet->setCellValue('AG'.$sn,$prod->Column5_34);
            $sheet->setCellValue('AH'.$sn,$prod->Column5_35);
            $sheet->setCellValue('AI'.$sn,$prod->Column5_38);
            $sheet->setCellValue('AJ'.$sn,$prod->Column5_39);
            $sheet->setCellValue('AK'.$sn,' ');
            $sheet->setCellValue('AL'.$sn,$prod->Column5_42);
            $sheet->setCellValue('AM'.$sn,$prod->Column5_43);
            $sheet->setCellValue('AN'.$sn,$prod->Column5_44);
            $sheet->setCellValue('AO'.$sn,$prod->Column5_45);
            $sheet->setCellValue('AP'.$sn,$prod->Column5_46);
            $sheet->setCellValue('AQ'.$sn,$prod->Column5_47);
            $sheet->setCellValue('AR'.$sn,$prod->Column5_48);
            $sheet->setCellValue('AS'.$sn,$prod->Column5_49);
            $sheet->setCellValue('AT'.$sn,$prod->Column5_50);
            $sheet->setCellValue('AU'.$sn,$prod->Column5_51);
            $sheet->setCellValue('AV'.$sn,$prod->Column5_52);
            $sheet->setCellValue('AW'.$sn,$prod->Column5_53);
			$sheet->setCellValue('AX'.$sn,$prod->Column5_54);
            $sheet->setCellValue('AY'.$sn,$prod->Column5_55);
            $sheet->setCellValue('AZ'.$sn,$prod->Column5_56);
            $sheet->setCellValue('BA'.$sn,$prod->Column5_57);
            $sheet->setCellValue('BB'.$sn,$prod->Column5_58);
            $sheet->setCellValue('BC'.$sn,' ');
            $sheet->setCellValue('BD'.$sn,$prod->Column5_60);
            $sheet->setCellValue('BE'.$sn,$prod->Column5_61);
            $sheet->setCellValue('BF'.$sn,$prod->Column5_62);
            $sheet->setCellValue('BG'.$sn,$prod->Column5_63);
            $sheet->setCellValue('BH'.$sn,$prod->Column5_64);
            $sheet->setCellValue('BI'.$sn,$prod->Column5_65);
            $sheet->setCellValue('BJ'.$sn,$prod->Column5_66);
            $sheet->setCellValue('BK'.$sn,$prod->Column5_67);
            $sheet->setCellValue('BL'.$sn,$prod->Column5_68);
            $sheet->setCellValue('BM'.$sn,$prod->Column5_69);
            $sheet->setCellValue('BN'.$sn,$prod->Column5_70);
            $sheet->setCellValue('BO'.$sn,$prod->Column5_71);
            $sheet->setCellValue('BP'.$sn,$prod->Column5_72);
            $sheet->setCellValue('BQ'.$sn,$prod->Column5_73);
            $sheet->setCellValue('BR'.$sn,$prod->Column5_74);
            $sheet->setCellValue('BS'.$sn,$prod->Column5_75);
            $sheet->setCellValue('BT'.$sn,$prod->Column5_76);
            $sheet->setCellValue('BU'.$sn,' ');
            $sheet->setCellValue('BV'.$sn,$prod->Column5_78);
            $sheet->setCellValue('BW'.$sn,$prod->Column5_79);
			$sheet->setCellValue('BX'.$sn,$prod->Column5_80);
            $sheet->setCellValue('BY'.$sn,$prod->Column5_81);
            $sheet->setCellValue('BZ'.$sn,' ');
            $sheet->setCellValue('CA'.$sn,$prod->Column5_83);
            $sheet->setCellValue('CB'.$sn,$prod->Column5_84);
            $sheet->setCellValue('CC'.$sn,$prod->Column5_85);
            $sheet->setCellValue('CD'.$sn,$prod->Column5_86);
            $sheet->setCellValue('CE'.$sn,$prod->Column5_87);
            $sheet->setCellValue('CF'.$sn,$prod->Column5_88);
			$sn++;
		}

	$spreadsheet->getActiveSheet()->setTitle('Step 5');

//STEP 6 DATA COMP ADJ PER KONTRAK
$spreadsheet->createSheet();

//fetch my data
$productlist6=$this->home_model->review_list6();

$spreadsheet->getDefaultStyle()->getFont()->setName('Trebuchet MS');
$spreadsheet->setActiveSheetIndex(5)->getStyle('B6:V7')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
$spreadsheet->setActiveSheetIndex(5)->getStyle('B8:V8')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');
$spreadsheet->setActiveSheetIndex(5)->getStyle('B6:W7')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);
$spreadsheet->setActiveSheetIndex(5)->getStyle('B6:V7')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$spreadsheet->setActiveSheetIndex(5)->getStyle('B6:V7')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
$spreadsheet->setActiveSheetIndex(5)->getStyle('B6:V2000')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

$styleArray = [
    'font' => [
        'bold' => true,
    ],
];
$spreadsheet->setActiveSheetIndex(5)->getStyle('A6:V8')->applyFromArray($styleArray);
$spreadsheet->setActiveSheetIndex(5)->getStyle('A1:V4')->applyFromArray($styleArray);

$styleArray1 = [
    'font' => [
        'size' => 10,
    ],
];
$spreadsheet->setActiveSheetIndex(5)->getStyle('A1:V5000')->applyFromArray($styleArray1);
$spreadsheet->setActiveSheetIndex(5)->getStyle('A9:V5000')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);

for ($i = 'A'; $i !=  $spreadsheet->setActiveSheetIndex(5)->getHighestColumn(); $i++) {
    $spreadsheet->setActiveSheetIndex(5)->getColumnDimension($i)->setAutoSize(TRUE);
}

$sheet = $spreadsheet->setActiveSheetIndex(5);
$sheet0_1 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('A1:D1');
$sheet0_2 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('A2:D2');
$sheet0_3 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('A3:D3');
$sheet0_4 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('A4:C4');
$sheet0_1->setCellValue('A1', 'Contract Review IFRS 15 / PSAK 72');
$sheet0_2->setCellValue('A2', 'Step 4 - TP Allocation');
$sheet0_3->setCellValue('A3', 'PT Telkom Indonesia Tbk');
$sheet0_4->setCellValue('A4', 'F. Year');

//HEADER STEP 4
//MERGE
$sheet1 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('B6:B7');
$sheet2 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('C6:C7');
$sheet3 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('D6:F6');
$sheet4 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('G6:G7');

$sheet5 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('H6:K6');

$sheet6 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('L6:L7');
$sheet7 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('M6:M7');

$sheet8 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('N6:N7');

$sheet9 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('O6:O7');

$sheet10 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('P6:T6');

$sheet11 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('U6:U7');
$sheet12 = $spreadsheet->setActiveSheetIndex(5)->mergeCells('V6:V7');

$sheet->setCellValue('A5', '');
$sheet1->setCellValue('B6', 'No ');
$sheet2->setCellValue('C6', 'Contract Number');
//---------------------------------------------------------
$sheet3->setCellValue('D6', 'Proposed Revenue Recognized');
//---------------------------------------------------------

$sheet4->setCellValue('G6', 'Total');

$sheet5->setCellValue('H6', 'Total Billing');

$sheet6->setCellValue('L6', 'Total Cost (for Agent Only)');
$sheet7->setCellValue('M6', 'Total Adjustment');

$sheet8->setCellValue('N6', '');

$sheet9->setCellValue('O6', 'Revenue Recognised');

$sheet10->setCellValue('P6', 'Total Billing Awal');

$sheet11->setCellValue('U6', 'Total');
$sheet12->setCellValue('V6', 'Remarks (Net Tibs Negatif)');

//Proposed Revenue Recognized
$sheet->setCellValue('D7', 'Revenue Recognised');
$sheet->setCellValue('E7', 'Billing PY');
$sheet->setCellValue('F7', 'Adjustment Internal');
//--------------------------------------------------------------------------

//Total Billing
$sheet->setCellValue('H7', 'Total Billing');
$sheet->setCellValue('I7', 'Total Adjustment Internal');
$sheet->setCellValue('J7', 'Tibs SORODO');
$sheet->setCellValue('K7', 'Total Billing Lease');
//--------------------------------------------------------------------------

//Total Billing Awal
$sheet->setCellValue('P7', 'Billing PY');
$sheet->setCellValue('Q7', 'Total Billing');
$sheet->setCellValue('R7', 'Total Adjustment Internal');
$sheet->setCellValue('S7', 'Tibs SORODO');
$sheet->setCellValue('T7', 'Total Billing Lease');



        //SN Mulai dari Row Berapa
        $sn=9;
        foreach ($productlist6 as $prod) {
            //echo $prod->product_name;
            $sheet->setCellValue('A'.$sn,' ');
            $sheet->setCellValue('B'.$sn,$prod->Column6_2);
            $sheet->setCellValue('C'.$sn,$prod->Column6_3);
            $sheet->setCellValue('D'.$sn,$prod->Column6_4);
            $sheet->setCellValue('E'.$sn,$prod->Column6_5);
            $sheet->setCellValue('F'.$sn,$prod->Column6_6);
            $sheet->setCellValue('G'.$sn,$prod->Column6_7);
            $sheet->setCellValue('H'.$sn,$prod->Column6_8);
            $sheet->setCellValue('I'.$sn,$prod->Column6_9);
            $sheet->setCellValue('J'.$sn,$prod->Column6_10);
            $sheet->setCellValue('K'.$sn,$prod->Column6_11);
            $sheet->setCellValue('L'.$sn,$prod->Column6_12);
            $sheet->setCellValue('M'.$sn,$prod->Column6_13);
            $sheet->setCellValue('N'.$sn,$prod->Column6_14);
            $sheet->setCellValue('O'.$sn,$prod->Column6_15);
            $sheet->setCellValue('P'.$sn,$prod->Column6_16);
            $sheet->setCellValue('Q'.$sn,$prod->Column6_17);
            $sheet->setCellValue('R'.$sn,$prod->Column6_18);
            $sheet->setCellValue('S'.$sn,$prod->Column6_19);
            $sheet->setCellValue('T'.$sn,$prod->Column6_20);
            $sheet->setCellValue('U'.$sn,$prod->Column6_21);
            $sheet->setCellValue('V'.$sn,$prod->Column6_22);
            $sn++;
        }

$spreadsheet->getActiveSheet()->setTitle('Comp Adj Per Kontrak');

		//STEP 7 DATA COMP ADJ PER GL
$spreadsheet->createSheet();

//fetch my data
$productlist7=$this->home_model->review_list7();

$spreadsheet->getDefaultStyle()->getFont()->setName('Trebuchet MS');
$spreadsheet->setActiveSheetIndex(6)->getStyle('B6:U7')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
$spreadsheet->setActiveSheetIndex(6)->getStyle('B8:U8')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');
$spreadsheet->setActiveSheetIndex(6)->getStyle('B6:V7')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);
$spreadsheet->setActiveSheetIndex(6)->getStyle('B6:U7')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$spreadsheet->setActiveSheetIndex(6)->getStyle('B6:U7')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
$spreadsheet->setActiveSheetIndex(6)->getStyle('B6:U2000')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

$styleArray = [
'font' => [
'bold' => true,
],
];
$spreadsheet->setActiveSheetIndex(6)->getStyle('A6:U8')->applyFromArray($styleArray);
$spreadsheet->setActiveSheetIndex(6)->getStyle('A1:U4')->applyFromArray($styleArray);

$styleArray1 = [
'font' => [
'size' => 10,
],
];
$spreadsheet->setActiveSheetIndex(6)->getStyle('A1:U5000')->applyFromArray($styleArray1);
$spreadsheet->setActiveSheetIndex(6)->getStyle('A9:U5000')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);

for ($i = 'A'; $i !=  $spreadsheet->setActiveSheetIndex(6)->getHighestColumn(); $i++) {
$spreadsheet->setActiveSheetIndex(6)->getColumnDimension($i)->setAutoSize(TRUE);
}

$sheet = $spreadsheet->setActiveSheetIndex(6);
$sheet0_1 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('A1:D1');
$sheet0_2 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('A2:D2');
$sheet0_3 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('A3:D3');
$sheet0_4 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('A4:C4');
$sheet0_1->setCellValue('A1', 'Contract Review IFRS 15 / PSAK 72');
$sheet0_2->setCellValue('A2', 'Adjustment Calculation  per GL');
$sheet0_3->setCellValue('A3', 'PT Telkom Indonesia Tbk');
$sheet0_4->setCellValue('A4', 'F. Year');

//HEADER DATA COMP ADJ PER GL
//MERGE
$sheet1 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('B6:B7');
$sheet2 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('C6:C7');
$sheet3 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('D6:D7');
$sheet4 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('E6:E7');
$sheet5 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('F6:F7');
$sheet6 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('G6:G7');
$sheet7 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('H6:J6');
$sheet8 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('K6:K7');
$sheet9 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('L6:O7');
$sheet10 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('P6:P7');
$sheet11 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('Q6:Q7');
$sheet12 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('R6:R7');
$sheet13 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('S6:S7');
$sheet14 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('T6:T7');
$sheet15 = $spreadsheet->setActiveSheetIndex(6)->mergeCells('U6:U7');

$sheet->setCellValue('A5', '');
$sheet1->setCellValue('B6', 'No ');
$sheet2->setCellValue('C6', 'Contract Number');
$sheet3->setCellValue('D6', 'Account Number (BTP)');
$sheet4->setCellValue('E6', 'BP Number');
$sheet5->setCellValue('F6', 'UBIS');
$sheet6->setCellValue('G6', 'GL Account');
$sheet7->setCellValue('H6', 'Proposed Revenue Recognized');
$sheet8->setCellValue('K6', 'Total');
$sheet9->setCellValue('L6', 'Total Billing');
$sheet10->setCellValue('P6', 'Total Cost (for Agent Only)');
$sheet11->setCellValue('Q6', 'GL Account');
$sheet12->setCellValue('R6', 'Total Adjustment');
$sheet13->setCellValue('S6', 'Contract Number');
$sheet14->setCellValue('T6', 'Total Contract Asset (Contract Liabilities) Per Contract');
$sheet15->setCellValue('U6', 'Contract Number');

//Proposed Revenue Recognized
$sheet->setCellValue('H7', 'Revenue Recognised 2022');
$sheet->setCellValue('I7', 'Billing PY');
$sheet->setCellValue('J7', 'Adjustment Internal ');

//Total Billing
$sheet->setCellValue('L7', 'Total Billing');
$sheet->setCellValue('M7', 'Total Adjustment Internal');
$sheet->setCellValue('N7', 'TIBS SORODO');
$sheet->setCellValue('O7', 'Total Billing Lease');


//SN Mulai dari Row Berapa
$sn=9;
foreach ($productlist7 as $prod) {
//echo $prod->product_name;
$sheet->setCellValue('A'.$sn,' ');
$sheet->setCellValue('B'.$sn,$prod->Column7_2);
$sheet->setCellValue('C'.$sn,$prod->Column7_3);
$sheet->setCellValue('D'.$sn,$prod->Column7_4);
$sheet->setCellValue('E'.$sn,$prod->Column7_5);
$sheet->setCellValue('F'.$sn,$prod->Column7_6);
$sheet->setCellValue('G'.$sn,$prod->Column7_7);
$sheet->setCellValue('H'.$sn,$prod->Column7_8);
$sheet->setCellValue('I'.$sn,$prod->Column7_9);
$sheet->setCellValue('J'.$sn,$prod->Column7_10);
$sheet->setCellValue('K'.$sn,$prod->Column7_11);
$sheet->setCellValue('L'.$sn,$prod->Column7_12);
$sheet->setCellValue('M'.$sn,$prod->Column7_13);
$sheet->setCellValue('N'.$sn,$prod->Column7_14);
$sheet->setCellValue('O'.$sn,$prod->Column7_15);
$sheet->setCellValue('P'.$sn,$prod->Column7_16);
$sheet->setCellValue('Q'.$sn,$prod->Column7_17);
$sheet->setCellValue('R'.$sn,$prod->Column7_18);
$sheet->setCellValue('S'.$sn,$prod->Column7_19);
$sheet->setCellValue('T'.$sn,$prod->Column7_20);
$sheet->setCellValue('U'.$sn,$prod->Column7_21);



$sn++;
}

$spreadsheet->getActiveSheet()->setTitle('Comp Adj Per GL ');		

//STEP 8 KK 4.4_Q3 2022
$spreadsheet->createSheet();

//fetch my data
$productlist8=$this->home_model->review_list8();

$spreadsheet->getDefaultStyle()->getFont()->setName('Trebuchet MS');
$spreadsheet->setActiveSheetIndex(7)->getStyle('B8:R9')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
$spreadsheet->setActiveSheetIndex(7)->getStyle('B10:R10')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');
$spreadsheet->setActiveSheetIndex(7)->getStyle('B8:S9')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);
$spreadsheet->setActiveSheetIndex(7)->getStyle('B8:R9')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$spreadsheet->setActiveSheetIndex(7)->getStyle('B8:R9')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
$spreadsheet->setActiveSheetIndex(7)->getStyle('B8:R2000')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

$styleArray = [
'font' => [
'bold' => true,
],
];
$spreadsheet->setActiveSheetIndex(7)->getStyle('A6:R9')->applyFromArray($styleArray);
$spreadsheet->setActiveSheetIndex(7)->getStyle('A1:R4')->applyFromArray($styleArray);

$styleArray1 = [
'font' => [
'size' => 10,
],
];
$spreadsheet->setActiveSheetIndex(7)->getStyle('A1:R5000')->applyFromArray($styleArray1);
$spreadsheet->setActiveSheetIndex(7)->getStyle('A9:R5000')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);

for ($i = 'A'; $i !=  $spreadsheet->setActiveSheetIndex(7)->getHighestColumn(); $i++) {
$spreadsheet->setActiveSheetIndex(7)->getColumnDimension($i)->setAutoSize(TRUE);
}

$sheet = $spreadsheet->setActiveSheetIndex(7);
$sheet0_1 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('A1:D1');
$sheet0_2 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('A2:D2');
$sheet0_3 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('A3:D3');
$sheet0_4 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('A4:C4');
$sheet0_1->setCellValue('A1', 'Contract Review IFRS 15 / PSAK 72');
$sheet0_2->setCellValue('A2', 'KK 4.4 (Current - Non Current)');
$sheet0_3->setCellValue('A3', 'PT Telkom Indonesia Tbk');
$sheet0_4->setCellValue('A4', 'F. Year');

//HEADER KK 4.4_Q3 2022
//MERGE
$sheet1 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('B8:B9');
$sheet2 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('C8:C9');
$sheet3 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('D8:D9');
$sheet4 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('E8:E9');
$sheet5 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('F8:F9');
$sheet6 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('G8:G9');
$sheet7 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('H8:H9');
$sheet8 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('I8:I9');
$sheet9 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('J8:J9');
$sheet10 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('K8:K9');
$sheet11 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('L8:L9');
$sheet12 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('M8:M9');
$sheet13 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('N8:N9');
$sheet14 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('O8:O9');
$sheet15 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('P8:P9');
$sheet16 = $spreadsheet->setActiveSheetIndex(7)->mergeCells('Q8:R8');

$sheet->setCellValue('A5', '');
$sheet1->setCellValue('B8', 'No ');
$sheet2->setCellValue('C8', 'Contract Number');
$sheet3->setCellValue('D8', 'Customer Name');
$sheet4->setCellValue('E8', 'Contract Start Date');
$sheet5->setCellValue('F8', 'Contract End Date');
$sheet6->setCellValue('G8', 'BP Number');
$sheet7->setCellValue('H8', 'BP Number (From Telkom)');
$sheet8->setCellValue('I8', 'UBIS');
$sheet9->setCellValue('J8', 'Beginning Balance 1 Jan 2022');
$sheet10->setCellValue('K8', 'Reversal Accrue 2021');
$sheet11->setCellValue('L8', 'Catch up Adjustment Review CACL');
$sheet12->setCellValue('M8', 'Adjustment CACL Q3 2022');
$sheet13->setCellValue('N8', 'Ending Balance - 30 Sep 2022');
$sheet14->setCellValue('O8', 'Estimated Revenue Recognised - One year ahead');
$sheet15->setCellValue('P8', 'Estimated Billing - One year ahead');
$sheet16->setCellValue('Q8', 'Contract Asset (Contract Liabilities)');


//Contract Asset (Contract Liabilities)
$sheet->setCellValue('Q9', 'One year ahead');
$sheet->setCellValue('R9', 'More than a year ahead');


//SN Mulai dari Row Berapa
$sn=11;
foreach ($productlist8 as $prod) {
//echo $prod->product_name;
$sheet->setCellValue('A'.$sn,' ');
$sheet->setCellValue('B'.$sn,$prod->Column8_2);
$sheet->setCellValue('C'.$sn,$prod->Column8_3);
$sheet->setCellValue('D'.$sn,$prod->Column8_4);
$sheet->setCellValue('E'.$sn,$prod->Column8_5);
$sheet->setCellValue('F'.$sn,$prod->Column8_6);
$sheet->setCellValue('G'.$sn,$prod->Column8_7);
$sheet->setCellValue('H'.$sn,$prod->Column8_8);
$sheet->setCellValue('I'.$sn,$prod->Column8_9);
$sheet->setCellValue('J'.$sn,$prod->Column8_10);
$sheet->setCellValue('K'.$sn,$prod->Column8_11);
$sheet->setCellValue('L'.$sn,$prod->Column8_12);
$sheet->setCellValue('M'.$sn,$prod->Column8_13);
$sheet->setCellValue('N'.$sn,$prod->Column8_14);
$sheet->setCellValue('O'.$sn,$prod->Column8_15);
$sheet->setCellValue('P'.$sn,$prod->Column8_16);
$sheet->setCellValue('Q'.$sn,$prod->Column8_17);
$sheet->setCellValue('R'.$sn,$prod->Column8_18);
$sn++;
}

$spreadsheet->getActiveSheet()->setTitle('KK 4.4_Q3 2022');		

    //STEP 9 Comp Summary of Unsatisfied PO
	$spreadsheet->createSheet();

	//fetch my data
	$productlist9=$this->home_model->review_list9();
	
	$spreadsheet->getDefaultStyle()->getFont()->setName('Trebuchet MS');
	$spreadsheet->setActiveSheetIndex(8)->getStyle('B7:P8')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
	$spreadsheet->setActiveSheetIndex(8)->getStyle('N6:O6')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
	$spreadsheet->setActiveSheetIndex(8)->getStyle('B9:P9')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');
	$spreadsheet->setActiveSheetIndex(8)->getStyle('B6:Q7')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);
	$spreadsheet->setActiveSheetIndex(8)->getStyle('B6:P7')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
	$spreadsheet->setActiveSheetIndex(8)->getStyle('B6:P7')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
	$spreadsheet->setActiveSheetIndex(8)->getStyle('B7:P2000')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
	$spreadsheet->setActiveSheetIndex(8)->getStyle('N6:O6')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
	
	$styleArray = [
	'font' => [
	'bold' => true,
	],
	];
	$spreadsheet->setActiveSheetIndex(8)->getStyle('A6:P8')->applyFromArray($styleArray);
	$spreadsheet->setActiveSheetIndex(8)->getStyle('A1:P4')->applyFromArray($styleArray);
	
	$styleArray1 = [
	'font' => [
	'size' => 10,
	],
	];
	$spreadsheet->setActiveSheetIndex(8)->getStyle('A1:P5000')->applyFromArray($styleArray1);
	$spreadsheet->setActiveSheetIndex(8)->getStyle('A9:P5000')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
	
	for ($i = 'A'; $i !=  $spreadsheet->setActiveSheetIndex(8)->getHighestColumn(); $i++) {
	$spreadsheet->setActiveSheetIndex(8)->getColumnDimension($i)->setAutoSize(TRUE);
	}
	
	$sheet = $spreadsheet->setActiveSheetIndex(8);
	$sheet0_1 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('A1:D1');
	$sheet0_2 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('A2:D2');
	$sheet0_3 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('A3:D3');
	$sheet0_4 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('A4:C4');
	$sheet0_1->setCellValue('A1', 'Contract Review IFRS 15 / PSAK 72');
	$sheet0_2->setCellValue('A2', 'Summary Unsatisfied PO');
	$sheet0_3->setCellValue('A3', 'PT Telkom Indonesia Tbk');
	$sheet0_4->setCellValue('A4', 'F. Year');
	
	//HEADER Comp Summary of Unsatisfied PO
	//MERGE
	$sheet1 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('B7:B8');
	$sheet2 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('C7:C8');
	$sheet3 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('D7:D8');
	$sheet4 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('E7:E8');
	$sheet5 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('F7:F8');
	$sheet6 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('G7:G8');
	$sheet7 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('H7:H8');
	$sheet8 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('I7:I8');
	$sheet9 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('J7:J8');
	$sheet10 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('K7:K8');
	$sheet11 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('L7:L8');
	$sheet12 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('M7:M8');
	$sheet13 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('N6:O6');
	$sheet14 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('N7:N8');
	$sheet15 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('O7:O8');
	$sheet16 = $spreadsheet->setActiveSheetIndex(8)->mergeCells('P7:P8');
	
	$sheet->setCellValue('A5', '');
	$sheet1->setCellValue('B7', 'No ');
	$sheet2->setCellValue('C7', 'Contract Number');
	$sheet3->setCellValue('D7', 'Customer Name');
	$sheet4->setCellValue('E7', 'Contract Start Date');
	$sheet5->setCellValue('F7', 'Contract End Date');
	$sheet6->setCellValue('G7', 'Price Allocation (after discount & variable consideration)');
	$sheet7->setCellValue('H7', 'Recognised Revenue 2019');
	$sheet8->setCellValue('I7', 'Recognised Revenue 2020');
	$sheet9->setCellValue('J7', 'Recognised Revenue 2021');
	$sheet10->setCellValue('K7', 'Recognised Revenue Q3 2022');
	$sheet11->setCellValue('L7', 'Estimated Recognised Revenue (One Year Ahead)');
	$sheet12->setCellValue('M7', 'Unsatisfied PO 30 September 2022');
	$sheet13->setCellValue('N6', 'Unsatisfied PO');
	$sheet14->setCellValue('N7', 'Current Portion/One Year Ahead');
	$sheet15->setCellValue('O7', 'Noncurrent Portion/More Than One Year');
	$sheet16->setCellValue('P7', 'BP Number');
	
	
	//SN Mulai dari Row Berapa
	$sn=10;
	foreach ($productlist9 as $prod) {
	//echo $prod->product_name;
	$sheet->setCellValue('A'.$sn,' ');
	$sheet->setCellValue('B'.$sn,$prod->Column9_2);
	$sheet->setCellValue('C'.$sn,$prod->Column9_3);
	$sheet->setCellValue('D'.$sn,$prod->Column9_4);
	$sheet->setCellValue('E'.$sn,$prod->Column9_5);
	$sheet->setCellValue('F'.$sn,$prod->Column9_6);
	$sheet->setCellValue('G'.$sn,$prod->Column9_7);
	$sheet->setCellValue('H'.$sn,$prod->Column9_8);
	$sheet->setCellValue('I'.$sn,$prod->Column9_9);
	$sheet->setCellValue('J'.$sn,$prod->Column9_10);
	$sheet->setCellValue('K'.$sn,$prod->Column9_11);
	$sheet->setCellValue('L'.$sn,$prod->Column9_12);
	$sheet->setCellValue('M'.$sn,$prod->Column9_13);
	$sheet->setCellValue('N'.$sn,$prod->Column9_14);
	$sheet->setCellValue('O'.$sn,$prod->Column9_15);
	$sheet->setCellValue('P'.$sn,$prod->Column9_16);
	$sn++;
	}
	
	$spreadsheet->getActiveSheet()->setTitle('Comp Summary of Unsatisfied PO');	
	
//STEP 10 Proyeksi Revenue
$spreadsheet->createSheet();

//fetch my data
$productlist10=$this->home_model->review_list10();

$spreadsheet->getDefaultStyle()->getFont()->setName('Trebuchet MS');
$spreadsheet->setActiveSheetIndex(9)->getStyle('B8:J9')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
$spreadsheet->setActiveSheetIndex(9)->getStyle('B10:J10')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');
$spreadsheet->setActiveSheetIndex(9)->getStyle('B8:K9')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);
$spreadsheet->setActiveSheetIndex(9)->getStyle('B8:J9')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$spreadsheet->setActiveSheetIndex(9)->getStyle('B8:J9')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
$spreadsheet->setActiveSheetIndex(9)->getStyle('B8:J2000')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

$styleArray = [
'font' => [
'bold' => true,
],
];
$spreadsheet->setActiveSheetIndex(9)->getStyle('A8:J9')->applyFromArray($styleArray);
$spreadsheet->setActiveSheetIndex(9)->getStyle('A1:J4')->applyFromArray($styleArray);

$styleArray1 = [
'font' => [
'size' => 10,
],
];
$spreadsheet->setActiveSheetIndex(9)->getStyle('A1:J5000')->applyFromArray($styleArray1);
$spreadsheet->setActiveSheetIndex(9)->getStyle('A11:J5000')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);

for ($i = 'A'; $i !=  $spreadsheet->setActiveSheetIndex(9)->getHighestColumn(); $i++) {
$spreadsheet->setActiveSheetIndex(9)->getColumnDimension($i)->setAutoSize(TRUE);
}

$sheet = $spreadsheet->setActiveSheetIndex(9);
$sheet0_1 = $spreadsheet->setActiveSheetIndex(9)->mergeCells('A1:D1');
$sheet0_2 = $spreadsheet->setActiveSheetIndex(9)->mergeCells('A2:D2');
$sheet0_3 = $spreadsheet->setActiveSheetIndex(9)->mergeCells('A3:D3');
$sheet0_4 = $spreadsheet->setActiveSheetIndex(9)->mergeCells('A4:C4');
$sheet0_1->setCellValue('A1', 'Contract Review IFRS 15 / PSAK 72');
$sheet0_2->setCellValue('A2', 'Revenue Projection');
$sheet0_3->setCellValue('A3', 'PT Telkom Indonesia Tbk');
$sheet0_4->setCellValue('A4', 'F. Year');

//HEADER Comp Summary of Unsatisfied PO
//MERGE
$sheet1 = $spreadsheet->setActiveSheetIndex(9)->mergeCells('B8:B9');
$sheet2 = $spreadsheet->setActiveSheetIndex(9)->mergeCells('C8:C9');
$sheet3 = $spreadsheet->setActiveSheetIndex(9)->mergeCells('D8:D9');
$sheet4 = $spreadsheet->setActiveSheetIndex(9)->mergeCells('E8:E9');
$sheet5 = $spreadsheet->setActiveSheetIndex(9)->mergeCells('F8:F9');
$sheet6 = $spreadsheet->setActiveSheetIndex(9)->mergeCells('G8:G9');
$sheet7 = $spreadsheet->setActiveSheetIndex(9)->mergeCells('H8:I8');
$sheet8 = $spreadsheet->setActiveSheetIndex(9)->mergeCells('J8:J9');

$sheet->setCellValue('A5', '');
$sheet1->setCellValue('B8', 'No ');
$sheet2->setCellValue('C8', 'Contract Number');
$sheet3->setCellValue('D8', 'Customer Name');
$sheet4->setCellValue('E8', 'Contract Start Date');
$sheet5->setCellValue('F8', 'Contract End Date');
$sheet6->setCellValue('G8', 'Unsatisfied PO 30 Sep 2022');
$sheet7->setCellValue('H8', 'Estimated Recognised Revenue (One Year Ahead)');
$sheet8->setCellValue('J8', 'Estimated Recognised Revenue (One Year Ahead)');

//Estimated Recognised Revenue (One Year Ahead)
$sheet->setCellValue('H9', 'Status End Date');
$sheet->setCellValue('I9', 'Compile Step 5 - Projection (Overtime - Time elapsed)');

//SN Mulai dari Row Berapa
$sn=11;
foreach ($productlist10 as $prod) {
//echo $prod->product_name;
$sheet->setCellValue('A'.$sn,' ');
$sheet->setCellValue('B'.$sn,$prod->Column10_2);
$sheet->setCellValue('C'.$sn,$prod->Column10_3);
$sheet->setCellValue('D'.$sn,$prod->Column10_4);
$sheet->setCellValue('E'.$sn,$prod->Column10_5);
$sheet->setCellValue('F'.$sn,$prod->Column10_6);
$sheet->setCellValue('G'.$sn,$prod->Column10_7);
$sheet->setCellValue('H'.$sn,$prod->Column10_8);
$sheet->setCellValue('I'.$sn,$prod->Column10_9);
$sheet->setCellValue('J'.$sn,$prod->Column10_10);
$sn++;
}

$spreadsheet->getActiveSheet()->setTitle('Proyeksi Revenue');

//STEP 11 Alokasi CACL per BP Number
$spreadsheet->createSheet();

//fetch my data
$productlist11=$this->home_model->review_list11();

	$spreadsheet->getDefaultStyle()->getFont()->setName('Trebuchet MS');
	$spreadsheet->setActiveSheetIndex(10)->getStyle('A7:X8')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF05');
	$spreadsheet->setActiveSheetIndex(10)->getStyle('A9:X9')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE699');
	$spreadsheet->setActiveSheetIndex(10)->getStyle('A6:Y8')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);
	$spreadsheet->setActiveSheetIndex(10)->getStyle('A6:X8')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
	$spreadsheet->setActiveSheetIndex(10)->getStyle('A6:X8')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
	$spreadsheet->setActiveSheetIndex(10)->getStyle('A7:X2000')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

	$styleArray = [
	'font' => [
	'bold' => true,
	],
	];
	$spreadsheet->setActiveSheetIndex(10)->getStyle('A6:X8')->applyFromArray($styleArray);
	$spreadsheet->setActiveSheetIndex(10)->getStyle('A1:X4')->applyFromArray($styleArray);

	$styleArray1 = [
	'font' => [
	'size' => 10,
	],
	];
	$spreadsheet->setActiveSheetIndex(10)->getStyle('A1:X5000')->applyFromArray($styleArray1);
	$spreadsheet->setActiveSheetIndex(10)->getStyle('A10:X5000')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);

	for ($i = 'A'; $i !=  $spreadsheet->setActiveSheetIndex(10)->getHighestColumn(); $i++) {
	$spreadsheet->setActiveSheetIndex(10)->getColumnDimension($i)->setAutoSize(TRUE);
	}

	$sheet = $spreadsheet->setActiveSheetIndex(10);
	$sheet0_1 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('A1:D1');
	$sheet0_2 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('A2:D2');
	$sheet0_3 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('A3:D3');
	$sheet0_4 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('A4:C4');
	$sheet0_1->setCellValue('A1', 'Contract Review IFRS 15 / PSAK 72');
	$sheet0_2->setCellValue('A2', 'Allocation CACL Per BP Number');
	$sheet0_3->setCellValue('A3', 'PT Telkom Indonesia Tbk');
	$sheet0_4->setCellValue('A4', 'F. Year');

	//HEADER Allocation CACL Per BP Number
	//MERGE
	$sheet1 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('A7:A8');
	$sheet2 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('B7:B8');
	$sheet3 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('C7:C8');
	$sheet4 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('D7:D8');
	$sheet5 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('E7:E8');
	$sheet6 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('F7:F8');
	$sheet7 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('G7:G8');
	$sheet8 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('H7:H8');
	$sheet9 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('I7:I8');
	$sheet10 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('J7:J8');
	$sheet11 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('K7:K8');
	$sheet12 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('L7:L8');
	$sheet13 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('M7:M8');
	$sheet14 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('N7:N8');
	$sheet15 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('O7:O8');
	$sheet16 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('P7:P8');
	$sheet17 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('Q7:Q8');
	$sheet18 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('R7:R8');
	$sheet19 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('S7:S8');
	$sheet20 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('T7:T8');
	$sheet21 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('U7:U8');
	$sheet22 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('V7:V8');
	$sheet23 = $spreadsheet->setActiveSheetIndex(10)->mergeCells('W7:X7');

	$sheet->setCellValue('A5', '');
	$sheet1->setCellValue('A7', 'No ');
	$sheet2->setCellValue('B7', 'CI|BP Number');
	$sheet3->setCellValue('C7', 'Contract Number');
	$sheet4->setCellValue('D7', 'BP Number');
	$sheet5->setCellValue('E7', 'TIBS per CI + BP Number');
	$sheet6->setCellValue('F7', 'Catch up Billing');
	$sheet7->setCellValue('G7', 'Adjustment Internal');
	$sheet8->setCellValue('H7', 'TIBS Sorodo');
	$sheet9->setCellValue('I7', 'Total Billing Q3 2022');
	$sheet10->setCellValue('J7', 'TIBS 2019');
	$sheet11->setCellValue('K7', 'TIBS 2020');
	$sheet12->setCellValue('L7', 'TIBS 2021');
	$sheet13->setCellValue('M7', 'Accumulated TIBS Up to Q3 2022');
	$sheet14->setCellValue('N7', 'TIBS per CI + BP Number after Control (negative value)');
	$sheet15->setCellValue('O7', 'Proporsi per BP Number');
	$sheet16->setCellValue('P7', 'Beginning Balance 1 Jan 2022');
	$sheet17->setCellValue('Q7', 'Reversal Accrue 2021');
	$sheet18->setCellValue('R7', 'Catch up Adjustment Review CACL');
	$sheet19->setCellValue('S7', 'Adjustment CACL Q3 2022');
	$sheet20->setCellValue('T7', 'Ending Balance 30 Sep 2022');
	$sheet21->setCellValue('U7', 'Estimated Revenue Recognised - One year ahead');
	$sheet22->setCellValue('V7', 'Estimated Billing - One year ahead');
	$sheet23->setCellValue('W7', 'Contract Asset (Contract Liabilities)');


	//Contract Asset (Contract Liabilities)
	$sheet->setCellValue('W8', 'One year ahead');
	$sheet->setCellValue('X8', 'More than a year ahead');

	//SN Mulai dari Row Berapa
	$sn=10;
	foreach ($productlist11 as $prod) {
	//echo $prod->product_name;
	$sheet->setCellValue('A'.$sn,$prod->Column11_2);
	$sheet->setCellValue('B'.$sn,$prod->Column11_3);
	$sheet->setCellValue('C'.$sn,$prod->Column11_4);
	$sheet->setCellValue('D'.$sn,$prod->Column11_5);
	$sheet->setCellValue('E'.$sn,$prod->Column11_6);
	$sheet->setCellValue('F'.$sn,$prod->Column11_7);
	$sheet->setCellValue('G'.$sn,$prod->Column11_8);
	$sheet->setCellValue('H'.$sn,$prod->Column11_9);
	$sheet->setCellValue('I'.$sn,$prod->Column11_10);
	$sheet->setCellValue('J'.$sn,$prod->Column11_11);
	$sheet->setCellValue('K'.$sn,$prod->Column11_12);
	$sheet->setCellValue('L'.$sn,$prod->Column11_13);
	$sheet->setCellValue('M'.$sn,$prod->Column11_14);
	$sheet->setCellValue('N'.$sn,$prod->Column11_15);
	$sheet->setCellValue('O'.$sn,$prod->Column11_16);
	$sheet->setCellValue('P'.$sn,$prod->Column11_17);
	$sheet->setCellValue('Q'.$sn,$prod->Column11_18);
	$sheet->setCellValue('R'.$sn,$prod->Column11_19);
	$sheet->setCellValue('S'.$sn,$prod->Column11_20);
	$sheet->setCellValue('T'.$sn,$prod->Column11_21);
	$sheet->setCellValue('U'.$sn,$prod->Column11_22);
	$sheet->setCellValue('V'.$sn,$prod->Column11_23);
	$sheet->setCellValue('W'.$sn,$prod->Column11_24);
	$sheet->setCellValue('X'.$sn,$prod->Column11_25);
	$sn++;
	}

$spreadsheet->getActiveSheet()->setTitle('Alokasi CACL per BP Number');	

		$spreadsheet->setActiveSheetIndex(0);
		
		$writer = new Xlsx($spreadsheet);
		$writer->save('php://output');

        header("location:/home/");
	}
}
<?php

namespace App\Controllers\Export;
use App\Controllers\BaseController;
use App\Models\StudentModel;
use App\Models\TotnghiepModel;
use App\Models\UutienModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
class ExportController extends BaseController
{
	public function search_if()
    {
        // Lấy từ khóa tìm kiếm từ request
	    $keyword = $this->request->getVar('keyword');

	    // Xử lý tìm kiếm theo mã sinh viên và họ tên trong cơ sở dữ liệu
	    $model = new StudentModel();
	    $result = $model->search($keyword);

	    $show = [];
        $data['result'] = $result;
        $show = $this->LoadView($show, 'Thống kê hồ sơ sinh viên', 'admin/user/pages/action/Export/RStudentList', $data);

	    if ($result) {
	        // Lưu kết quả tìm kiếm vào biến session
	        session()->set('search_results', $result);

	        // Chuyển hướng đến action/route để xuất báo cáo
	        return view('admin/main', $show);
	    } else {
	        // Không tìm thấy kết quả, xử lý theo logic của bạn
	        return redirect()->back()->with('error', 'Không tìm thấy kết quả tương ứng');
	    }
	    }

    public function exportReport($searchResults = '')
    {
        // Lấy kết quả tìm kiếm từ biến session
	    $searchResults = session()->get('search_results');

	    if (!$searchResults) {
	        // Không có kết quả tìm kiếm, xử lý theo logic của bạn
	        return redirect()->back()->with('error', 'Không có kết quả tìm kiếm');
	    }

	    // Tạo một đối tượng Spreadsheet mới
	    $spreadsheet = new Spreadsheet();

	    // Tạo một trang tính (worksheet) trong Spreadsheet
	    $worksheet = $spreadsheet->getActiveSheet();

	    // Đặt tên các cột trong trang tính
	    $worksheet->setCellValue('A1', 'STT');
	    $worksheet->setCellValue('B1', 'Mã sinh viên');
	    $worksheet->setCellValue('C1', 'Họ tên đầy đủ');
	    $worksheet->setCellValue('D1', 'Giới tính');
	    $worksheet->setCellValue('E1', 'Lớp');
	    $worksheet->setCellValue('F1', 'Năm nhập học');
	    $worksheet->setCellValue('G1', 'Khóa');
	    $worksheet->setCellValue('H1', 'Ngành');
	    $worksheet->setCellValue('I1', 'Khoa');
	    $worksheet->setCellValue('J1', 'Năm tốt nghiệp');
	    $worksheet->setCellValue('K1', 'Tình trạng học tập');

	    // Định dạng các ô tiêu đề
        $headerStyle = $worksheet->getStyle('A1:K1');
        $headerStyle->applyFromArray([
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ]);

	    // Đổ dữ liệu từ mảng searchResults vào trang tính
        $row = 2;
        $index = 1;
        foreach ($searchResults as $result) {
            $worksheet->setCellValue('A' . $row, $index);
            $worksheet->setCellValue('B' . $row, $result['MaSV']);
            $worksheet->setCellValue('C' . $row, $result['Hoten']);
            $worksheet->setCellValue('D' . $row, $result['Gioitinh']);
            $worksheet->setCellValue('E' . $row, $result['Lop']);
            $worksheet->setCellValue('F' . $row, $result['NamNhapHoc']);
            $worksheet->setCellValue('G' . $row, $result['Khoas']);
            $worksheet->setCellValue('H' . $row, $result['Nganh']);
            $worksheet->setCellValue('I' . $row, $result['Khoa']);
            $worksheet->setCellValue('J' . $row, $result['NamTotNghiep']);
            $worksheet->setCellValue('K' . $row, $result['TinhTrangHocTap']);
            $row++;
            $index++;
        }

	    // Định dạng các cột với chiều rộng tự động
        foreach (range('A', 'K') as $column) {
            $worksheet->getColumnDimension($column)->setAutoSize(true);
        }

        // Định dạng trang tính
        $worksheet->getPageSetup()->setFitToWidth(1);

        // Định dạng dòng dữ liệu
        $dataStyle = $worksheet->getStyle('A2:K' . ($row - 1));
        $dataStyle->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        // Định dạng lại chiều cao dòng
        $worksheet->getRowDimension(1)->setRowHeight(25);
        for ($i = 2; $i <= $row; $i++) {
            $worksheet->getRowDimension($i)->setRowHeight(20);
        }

        // Định dạng font cho các ô số thứ tự
        $indexStyle = $worksheet->getStyle('A2:A' . ($row - 1));
        $indexStyle->applyFromArray([
            'font' => [
                'bold' => true,
            ],
        ]);

        // Định dạng font cho các ô thông tin sinh viên
        $dataFontStyle = $worksheet->getStyle('B2:K' . ($row - 1));
        $dataFontStyle->applyFromArray([
            'font' => [
                'name' => 'Arial',
            ],
        ]);

        // Định dạng file và tên tệp xuất báo cáo
        $filename = 'student_report.xlsx';

        // Tạo một đối tượng Writer để ghi dữ liệu vào tệp Excel
        $writer = new Xlsx($spreadsheet);

        // Thiết lập header cho tệp Excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Ghi dữ liệu vào tệp Excel và xuất file
        $writer->save('php://output');
    }



    public function search_tn()
    {
        // Lấy từ khóa tìm kiếm từ request
	    $keyword = $this->request->getVar('keyword');

	    // Xử lý tìm kiếm theo mã sinh viên và họ tên trong cơ sở dữ liệu
	    $model = new TotnghiepModel();
	    $result = $model->search_tn($keyword);

	    $show = [];
        $data['result'] = $result;
        $show = $this->LoadView($show, 'Thống kê tốt nghiệp', 'admin/user/pages/action/Export/totnghiepview', $data);

	    if ($result) {
	        // Lưu kết quả tìm kiếm vào biến session
	        session()->set('search_results', $result);

	        // Chuyển hướng đến action/route để xuất báo cáo
	        return view('admin/main', $show);
	    } else {
	        // Không tìm thấy kết quả, xử lý theo logic của bạn
	        return redirect()->back()->with('error', 'Không tìm thấy kết quả tương ứng');
	    }
	    }

	    public function exportReport2($searchResults = '')
    {
        // Lấy kết quả tìm kiếm từ biến session
	    $searchResults = session()->get('search_results');

	    if (!$searchResults) {
	        // Không có kết quả tìm kiếm, xử lý theo logic của bạn
	        return redirect()->back()->with('error', 'Không có kết quả tìm kiếm');
	    }

	    // Tạo một đối tượng Spreadsheet mới
	    $spreadsheet = new Spreadsheet();

	    // Tạo một trang tính (worksheet) trong Spreadsheet
	    $worksheet = $spreadsheet->getActiveSheet();

	    // Đặt tên các cột trong trang tính
	    $worksheet->setCellValue('A1', 'STT');
	    $worksheet->setCellValue('B1', 'Mã sinh viên');
	    $worksheet->setCellValue('C1', 'Họ tên đầy đủ');
	    $worksheet->setCellValue('D1', 'Lớp');
	    $worksheet->setCellValue('E1', 'Khoa');
	    $worksheet->setCellValue('F1', 'Ngành');
	    $worksheet->setCellValue('G1', 'Năm tốt nghiệp');
	    $worksheet->setCellValue('H1', 'Xếp loại tốt nghiệp');

	    // Định dạng các ô tiêu đề
        $headerStyle = $worksheet->getStyle('A1:K1');
        $headerStyle->applyFromArray([
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ]);

	    // Đổ dữ liệu từ mảng searchResults vào trang tính
        $row = 2;
        $index = 1;
        foreach ($searchResults as $result) {
            $worksheet->setCellValue('A' . $row, $index);
            $worksheet->setCellValue('B' . $row, $result['MaSV']);
            $worksheet->setCellValue('C' . $row, $result['Hoten']);
            $worksheet->setCellValue('D' . $row, $result['Lop']);
            $worksheet->setCellValue('E' . $row, $result['Khoa']);
            $worksheet->setCellValue('F' . $row, $result['Nganh']);
            $worksheet->setCellValue('G' . $row, $result['NamTotNghiep']);
            $worksheet->setCellValue('H' . $row, $result['XepLoaiTotNghiep']);
            $row++;
            $index++;
        }

	    // Định dạng các cột với chiều rộng tự động
        foreach (range('A', 'K') as $column) {
            $worksheet->getColumnDimension($column)->setAutoSize(true);
        }

        // Định dạng trang tính
        $worksheet->getPageSetup()->setFitToWidth(1);

        // Định dạng dòng dữ liệu
        $dataStyle = $worksheet->getStyle('A2:K' . ($row - 1));
        $dataStyle->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        // Định dạng lại chiều cao dòng
        $worksheet->getRowDimension(1)->setRowHeight(25);
        for ($i = 2; $i <= $row; $i++) {
            $worksheet->getRowDimension($i)->setRowHeight(20);
        }

        // Định dạng font cho các ô số thứ tự
        $indexStyle = $worksheet->getStyle('A2:A' . ($row - 1));
        $indexStyle->applyFromArray([
            'font' => [
                'bold' => true,
            ],
        ]);

        // Định dạng font cho các ô thông tin sinh viên
        $dataFontStyle = $worksheet->getStyle('B2:K' . ($row - 1));
        $dataFontStyle->applyFromArray([
            'font' => [
                'name' => 'Arial',
            ],
        ]);

        // Định dạng file và tên tệp xuất báo cáo
        $filename = 'totnghiep.xlsx';

        // Tạo một đối tượng Writer để ghi dữ liệu vào tệp Excel
        $writer = new Xlsx($spreadsheet);

        // Thiết lập header cho tệp Excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Ghi dữ liệu vào tệp Excel và xuất file
        $writer->save('php://output');
    }



    public function search_ut()
    {
        // Lấy từ khóa tìm kiếm từ request
	    $keyword = $this->request->getVar('keyword');

	    // Xử lý tìm kiếm theo mã sinh viên và họ tên trong cơ sở dữ liệu
	    $model = new UutienModel();
	    $result = $model->search($keyword);

	    $show = [];
        $data['result'] = $result;
        $show = $this->LoadView($show, 'Thống kê tốt nghiệp', 'admin/user/pages/action/Export/uutienview', $data);

	    if ($result) {
	        // Lưu kết quả tìm kiếm vào biến session
	        session()->set('search_results', $result);

	        // Chuyển hướng đến action/route để xuất báo cáo
	        return view('admin/main', $show);
	    } else {
	        // Không tìm thấy kết quả, xử lý theo logic của bạn
	        return redirect()->back()->with('error', 'Không tìm thấy kết quả tương ứng');
	    }
	    }

	    public function exportReport3($searchResults = '')
    {
        // Lấy kết quả tìm kiếm từ biến session
	    $searchResults = session()->get('search_results');

	    if (!$searchResults) {
	        // Không có kết quả tìm kiếm, xử lý theo logic của bạn
	        return redirect()->back()->with('error', 'Không có kết quả tìm kiếm');
	    }

	    // Tạo một đối tượng Spreadsheet mới
	    $spreadsheet = new Spreadsheet();

	    // Tạo một trang tính (worksheet) trong Spreadsheet
	    $worksheet = $spreadsheet->getActiveSheet();

	    // Đặt tên các cột trong trang tính
	    $worksheet->setCellValue('A1', 'STT');
	    $worksheet->setCellValue('B1', 'Mã sinh viên');
	    $worksheet->setCellValue('C1', 'Họ tên đầy đủ');
	    $worksheet->setCellValue('D1', 'Lớp');
	    $worksheet->setCellValue('E1', 'Chế độ ưu tiên');

	    // Định dạng các ô tiêu đề
        $headerStyle = $worksheet->getStyle('A1:K1');
        $headerStyle->applyFromArray([
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ]);

	    // Đổ dữ liệu từ mảng searchResults vào trang tính
        $row = 2;
        $index = 1;
        foreach ($searchResults as $result) {
            $worksheet->setCellValue('A' . $row, $index);
            $worksheet->setCellValue('B' . $row, $result['MaSV']);
            $worksheet->setCellValue('C' . $row, $result['Hoten']);
            $worksheet->setCellValue('D' . $row, $result['Lop']);
            $worksheet->setCellValue('E' . $row, $result['CheDoUuTien']);
            $row++;
            $index++;
        }

	    // Định dạng các cột với chiều rộng tự động
        foreach (range('A', 'K') as $column) {
            $worksheet->getColumnDimension($column)->setAutoSize(true);
        }

        // Định dạng trang tính
        $worksheet->getPageSetup()->setFitToWidth(1);

        // Định dạng dòng dữ liệu
        $dataStyle = $worksheet->getStyle('A2:K' . ($row - 1));
        $dataStyle->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        // Định dạng lại chiều cao dòng
        $worksheet->getRowDimension(1)->setRowHeight(25);
        for ($i = 2; $i <= $row; $i++) {
            $worksheet->getRowDimension($i)->setRowHeight(20);
        }

        // Định dạng font cho các ô số thứ tự
        $indexStyle = $worksheet->getStyle('A2:A' . ($row - 1));
        $indexStyle->applyFromArray([
            'font' => [
                'bold' => true,
            ],
        ]);

        // Định dạng font cho các ô thông tin sinh viên
        $dataFontStyle = $worksheet->getStyle('B2:K' . ($row - 1));
        $dataFontStyle->applyFromArray([
            'font' => [
                'name' => 'Arial',
            ],
        ]);

        // Định dạng file và tên tệp xuất báo cáo
        $filename = 'uutien.xlsx';

        // Tạo một đối tượng Writer để ghi dữ liệu vào tệp Excel
        $writer = new Xlsx($spreadsheet);

        // Thiết lập header cho tệp Excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Ghi dữ liệu vào tệp Excel và xuất file
        $writer->save('php://output');
    }
}

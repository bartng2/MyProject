<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Authentication implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('user')) {
            return redirect()->to('login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $session = session();

        // Kiểm tra nếu có thông báo flash và người dùng có quyền hạn ADMIN
        if ($session->getFlashdata('message') && $session->get('user')['QuyenHan'] == 'ADMIN') {
            // Thêm thông báo flash vào phản hồi
            $newResponse = $response->setHeader('X-Flash-Message', $session->getFlashdata('message'));

            // Trả về phản hồi mới
            return $newResponse;
        }

        // Trả về phản hồi gốc nếu không có thay đổi
        return $response;
    }
}
<?php declare(strict_types=1);

namespace Gam6itko\OzonSeller\Tests\Service\V2\Posting;

use Gam6itko\OzonSeller\Exception\BadRequestException;
use Gam6itko\OzonSeller\Service\V2\Posting\FboService;
use Gam6itko\OzonSeller\Tests\Service\AbstractTestCase;

/**
 * @coversDefaultClass \Gam6itko\OzonSeller\Service\V2\Posting\FboService
 *
 * @author Alexander Strizhak <gam6itko@gmail.com>
 * @group
 */
class FboServiceTest extends AbstractTestCase
{
    protected function getClass(): string
    {
        return FboService::class;
    }

    public function testList()
    {
        $this->expectException(BadRequestException::class);
        $svc = new FboService(0, '');
        $svc->get("123");
//        $this->quickTest(
//            'list',
//            [
//                SortDirection::ASC,
//                0,
//                10,
//                [
//                    'since'  => new \DateTime('2018-11-18T11:27:45.154Z'),
//                    'to'     => new \DateTime('2019-11-18T11:27:45.154Z'),
//                    'status' => Status::AWAITING_APPROVE,
//                ],
//            ],
//            [
//                'POST',
//                '/v2/posting/fbo/list',
//                ['body' => '{"filter":{"since":"2018-11-18T11:27:45+00:00","to":"2019-11-18T11:27:45+00:00","status":"awaiting_approve"},"dir":"asc","offset":0,"limit":10}'],
//            ]
//        );
    }

    public function testGet(): void
    {
        $this->quickTest(
            'get',
            ['39268230-0002-3'],
            [
                'POST',
                '/v2/posting/fbo/get',
                ['body' => '{"posting_number":"39268230-0002-3"}'],
            ]
        );
    }
}
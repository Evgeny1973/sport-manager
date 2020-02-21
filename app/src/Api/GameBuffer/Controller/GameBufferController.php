<?php


namespace App\Api\GameBuffer\Controller;


use App\Api\GameBuffer\DTO\GameBufferDTO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class GameBufferController extends AbstractController
{
    public function index(Request $request, SerializerInterface $serializer, ValidatorInterface $validator): Response
    {
        $data = $request->getContent();
        
        $dto = $serializer->deserialize($data, GameBufferDTO::class, 'json');
        
        $violations = $validator->validate($dto);
        
        if ($violations->count() > 0) {
            $err = $serializer->serialize($violations, 'json');
            return JsonResponse::fromJsonString($err, 400);
        }
    }
}
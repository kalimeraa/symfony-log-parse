<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\LogRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class LogController
{
    #[Route('/count', methods: ['GET'])]
    public function index(LogRepository $logRepository, Request $request, ValidatorInterface $validator): JsonResponse
    {
        $constraints = new Assert\Collection([
           'fields' => [
                'startDate' => [
                    new Assert\Optional(),
                    new Assert\DateTime(),
                    new Assert\NotBlank(),
                ],
                'endDate' => [
                    new Assert\Optional(),
                    new Assert\DateTime(),
                    new Assert\NotBlank(),
                ],
                'serviceNames' => [
                    new Assert\Optional(),
                    new Assert\Type('array'),
                    new Assert\NotBlank(),
                ],
                'statusCode' => [
                    new Assert\Optional(),
                    new Assert\NotBlank(),
                ],
            ],
            'allowMissingFields' => true,
        ]);

        $errorBag = [];
        $params = $request->query->all();
        $errors = $validator->validate($params, $constraints);
        foreach ($errors as $error) {
            $errorBag[$error->getPropertyPath()] = $error->getMessage();
        }

        if (!empty($errorBag)) {
            return new JsonResponse($errorBag, 422);
        }

        $logs = $logRepository->findByFilters($params);

        return new JsonResponse(['counter' => count($logs)]);
    }
}

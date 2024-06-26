<?php

namespace App\Controller;

use App\Entity\Book;
use App\Repository\BookRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    #[Route('/library', name: 'library_home')]
    public function index(): Response
    {
        return $this->render('library/index.html.twig', [
            'controller_name' => 'BookController',
        ]);
    }

    #[Route('/library/create', name: 'library_create_form', methods: ['GET'])]
    public function createBookForm(): Response
    {
        return $this->render('library/create.html.twig');
    }

    #[Route('/library/create', name: 'library_create', methods: ['POST'])]
    public function createBook(
        ManagerRegistry $doctrine,
        Request $request
    ): Response {
        $entityManager = $doctrine->getManager();

        $book = new Book();
        $book->setTitle((string)$request->request->get('title'));
        $book->setIsbn((string)$request->request->get('isbn'));
        $book->setAuthor((string)$request->request->get('author'));
        $book->setImage((string)$request->request->get('image'));

        $entityManager->persist($book);
        $entityManager->flush();

        return $this->redirectToRoute('library_view_one', ['id' => $book->getId()]);
    }

    #[Route('/library/view', name: 'library_view_all')]
    public function viewAll(
        BookRepository $bookRepository
    ): Response {
        $books = $bookRepository->findAll();

        return $this->render('library/view.html.twig', [
            'books' => $books,
        ]);
    }

    #[Route('/library/view/{id}', name: 'library_view_one')]
    public function viewBook(
        BookRepository $bookRepository,
        int $id
    ): Response {
        $book = $bookRepository->find($id);

        return $this->render('library/book.html.twig', [
            'book' => $book,
        ]);
    }

    #[Route('/library/edit/{id}', name: 'library_edit', methods: ['GET'])]
    public function editBook(
        BookRepository $bookRepository,
        int $id
    ): Response {
        $book = $bookRepository->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        return $this->render('library/edit.html.twig', [
            'book' => $book,
        ]);
    }
    #[Route('/library/update', name: 'library_update', methods: ['POST'])]
    public function updateBook(
        ManagerRegistry $doctrine,
        Request $request
    ): Response {
        $entityManager = $doctrine->getManager();
        $id = $request->request->get('id');
        $book = $entityManager->getRepository(Book::class)->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        $book->setTitle((string)$request->request->get('title'));
        $book->setIsbn((string)$request->request->get('isbn'));
        $book->setAuthor((string)$request->request->get('author'));
        $book->setImage((string)$request->request->get('image'));
        $entityManager->flush();

        return $this->redirectToRoute('library_view_one', ['id' => $id]);
    }

    #[Route('/library/delete/{id}', name: 'library_delete')]
    public function deleteBook(
        ManagerRegistry $doctrine,
        int $id
    ): Response {
        $entityManager = $doctrine->getManager();
        $book = $entityManager->getRepository(Book::class)->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        $entityManager->remove($book);
        $entityManager->flush();

        return $this->redirectToRoute('library_view_all');
    }
}

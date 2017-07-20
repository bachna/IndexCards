<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Quiz;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Quiz controller.
 *
 * @Route("quiz")
 */
class QuizController extends Controller
{
    /**
     * @Route("/pltoen", name="pltoen")
     */
    public function PlToEnAction(Request $request)
    {
        $session = $request->getSession();
        $session->set("language", "PlToEn");

        return $this->redirect($this->generateUrl("quiz_new_anonymous"));
        // Sprawdzić, czy zadziała return $this->redirectToRoute("quiz_new_anonymous") - zamiennik
        // use Symfony\Component\HttpFoundation\RedirectResponse;
    }

    /**
     * @Route("/entopl", name="entopl")
     */
    public function EnToPlAction(Request $request)
    {
        $session = $request->getSession();
        $session->set("language", "EnToPl");

        return $this->redirect($this->generateUrl("quiz_new_anonymous"));
    }

//Actions fon anonymous user

    /**
     * @Route("/new/anonymous", name="quiz_new_anonymous")
     */
    public function newAnonymousAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('AppBundle:Word');

        $randomWords = $repo->getRandomWords();

        $session = $request->getSession();
        $session->set("quiz", $randomWords);
        $session->set("good", array());
        $session->set("bad", array());

        return $this->redirect($this->generateUrl("quiz_show_anonymous"));
    }

    /**
     * @Route("/show/anonymous/{translated}", name="quiz_show_anonymous")
     */
    public function showAnonymousAction(Request $request, $translated = false)
    {
        $session = $request->getSession();

        $quiz = $session->get("quiz");
        $language = $session->get("language");

        if (count($quiz) > 0) {
            $word = array_shift($quiz);
        } else {
            return $this->redirect($this->generateUrl("quiz_result_anonymous"));
        }

        if ($translated) {
            $session->set("quiz", $quiz);
        }

        return $this->render('default/new.html.twig', [
            "language" => $language,
            "word" => $word,
            'translated' => $translated,
        ]);
    }

    /**
     * @Route("/good/anonymous", name="quiz_good_anonymous")
     */
    public function goodResultAnonymousAction(Request $request)
    {
        $session = $request->getSession();
        $goodCount = $session->get("good");
        array_push($goodCount, "OK");
        $session->set("good", $goodCount);

        return $this->redirect($this->generateUrl("quiz_show_anonymous"));
    }

    /**
     * @Route("/bad/anonymous", name="quiz_bad_anonymous")
     */
    public function badResultAnonymousAction(Request $request)
    {
        $session = $request->getSession();
        $badCount = $session->get("bad");
        array_push($badCount, "NOT_OK");
        $session->set("bad", $badCount);

        return $this->redirect($this->generateUrl("quiz_show_anonymous"));
    }

    /**
     * @Route("/result/anonymous", name="quiz_result_anonymous")
     */
    public function resultAnonymousAction(Request $request)
    {
        $session = $request->getSession();

        $goodAll = $session->get("good");
        $badAll = $session->get("bad");

        $numberOfGoodAnswers = count($goodAll);
        $numberOfBadAnswers = count($badAll);

        return $this->render('default/result.html.twig', [
            "good_answers" => $numberOfGoodAnswers,
            "bad_answers" => $numberOfBadAnswers,
        ]);
    }

//Actions for logged user

    public function newAction()
    {

    }

    public function showAction()
    {

    }

    public function resultAction()
    {

    }

    public function historyAction()
    {

    }






//    /**
//     * Lists all quiz entities.
//     *
//     * @Route("/", name="quiz_index")
//     * @Method("GET")
//     */
//    public function indexAction()
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $quizzes = $em->getRepository('AppBundle:Quiz')->findAll();
//
//        return $this->render('quiz/index.html.twig', array(
//            'quizzes' => $quizzes,
//        ));
//    }
//
//    /**
//     * Creates a new quiz entity.
//     *
//     * @Route("/new", name="quiz_new")
//     * @Method({"GET", "POST"})
//     */
//    public function newAction(Request $request)
//    {
//        $quiz = new Quiz();
//        $form = $this->createForm('AppBundle\Form\QuizType', $quiz);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($quiz);
//            $em->flush();
//
//            return $this->redirectToRoute('quiz_show', array('id' => $quiz->getId()));
//        }
//
//        return $this->render('quiz/new.html.twig', array(
//            'quiz' => $quiz,
//            'form' => $form->createView(),
//        ));
//    }
//
//    /**
//     * Finds and displays a quiz entity.
//     *
//     * @Route("/{id}", name="quiz_show")
//     * @Method("GET")
//     */
//    public function showAction(Quiz $quiz)
//    {
//        $deleteForm = $this->createDeleteForm($quiz);
//
//        return $this->render('quiz/show.html.twig', array(
//            'quiz' => $quiz,
//            'delete_form' => $deleteForm->createView(),
//        ));
//    }
//
//
//    /**
//     * Deletes a quiz entity.
//     *
//     * @Route("/{id}", name="quiz_delete")
//     * @Method("DELETE")
//     */
//    public function deleteAction(Request $request, Quiz $quiz)
//    {
//        $form = $this->createDeleteForm($quiz);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->remove($quiz);
//            $em->flush();
//        }
//
//        return $this->redirectToRoute('quiz_index');
//    }
}

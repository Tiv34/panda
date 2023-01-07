<?php

namespace app\models;

use Yii;
use yii\db\Exception;
use yii\db\Query;

class Question
{
    public function getQuestionByUser($user_id = 1): bool|array
    {
        $answer_user = (new Query())
            ->select(['question_id'])
            ->from('poll_answer_user')
            ->where(['delete' => 0, 'user_id' => $user_id])
            ->all();
        $answer_done = [];
        if (!empty($answer_user)) {
            foreach ($answer_user as $value) {
                $answer_done[] = $value['question_id'];
            }
        }
        return (new Query())
            ->select('*')
            ->from('poll_question')
            ->where(['enable' => 1])
            ->andWhere(['not in','id',$answer_done])
            ->orderBy('sort ASC')
            ->one();
    }

    public function getAnswerByQuestion($question_id): array
    {
        return (new Query())
            ->select('*')
            ->from('poll_answer')
            ->where(['question_id' => $question_id])
            ->orderBy('sort ASC')
            ->all();
    }

    /**
     * @throws Exception
     */
    public function saveAnswer($data) {
        Yii::$app->db->createCommand()->insert('poll_answer_user', $data)->execute();
    }
}
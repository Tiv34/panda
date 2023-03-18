<?php

namespace app\models;

use app\models\dto\PollAnswer;
use app\models\dto\PollQuestion;
use Yii;
use yii\db\Exception;
use yii\db\Query;
use app\models\dto\PollAnswerUser;

class Question extends \yii\base\BaseObject
{
    public function getQuestionByUser($user_id = 1): array|null
    {
        /** @var $answer_user PollAnswerUser */
        $answer_user = PollAnswerUser::find()
            ->where(['delete' => 0, 'user_id' => $user_id])
            ->all();
        $answer_done = [];
        if (!empty($answer_user)) {
            foreach ($answer_user as $value) {
                $answer_done[] = $value->question_id;
            }
        }
        return PollQuestion::find()
            ->select('*')
            ->from('poll_question')
            ->where(['enable' => 1])
            ->andWhere(['not in','id',$answer_done])
            ->orderBy('sort ASC')
            ->asArray()
            ->one();
    }

    public function getCheckAnswerSkip($user_id): bool|array
    {
        return PollAnswerUser::find()
            ->from('poll_answer_user as pau')
            ->innerJoin('poll_answer as pa', 'pa.id = pau.answer_id')
            ->where(['pau.delete' => 0, 'pa.skip' => 1, 'pau.user_id' => $user_id])
            ->count();
    }

    public function getQuestionByUserCount(): bool|int|string
    {
        return PollQuestion::find()
            ->where(['enable' => 1])
            ->count();
    }

    public function getCheckAnswer($user_id = 1): bool|array
    {
        return PollAnswerUser::find()
            ->from('poll_answer_user')
            ->where(['delete' => 0, 'user_id' => $user_id])
            ->all();
    }

    public function updateAnswerByUser($user_id = 1) {
        $poll = $this->getCheckAnswer($user_id);
        foreach ($poll as $answer) {
            /** @var $answer PollAnswerUser */
            $answer->delete = 1;
            $answer->save();
        }
    }

    public function getAnswerByQuestion($question_id): array
    {
        return PollAnswer::find()
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

    public function getAllUsersAnswerByQuestion($question_id): array
    {
        return  (new Query())
            ->select(['answer_id', 'count(id) as count'])
            ->from('poll_answer_user')
            ->where(['delete' => 0, 'question_id' => $question_id])
            ->groupBy('answer_id')
            ->all();
    }


    public function getAllUsersCountAnswerByQuestion($question_id): array
    {
        return  (new Query())
            ->select(['COUNT(DISTINCT user_id) as user_count'])
            ->from('poll_answer_user')
            ->where(['delete' => 0, 'question_id' => $question_id])
            ->one();
    }
}
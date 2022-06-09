<?php

namespace Comments\Contracts;

use App\Models\Comment;
use Comment\Contracts\CommentAuthorContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $public_id
 * @property string $commentable_type
 * @property int $commentable_id
 * @property string $author_type
 * @property int $author_id
 * @property string $text
 * @property bool $is_automatic
 * @property bool $is_approved
 * @property string $approver_type
 * @property int $approver_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read CommentAuthorContract $author
 * @property-read Model|Eloquent $commentable
 * @method static Builder|CommentContract newModelQuery()
 * @method static Builder|CommentContract newQuery()
 * @method static Builder|CommentContract query()
 * @method static Builder|CommentContract whereAuthorId($value)
 * @method static Builder|CommentContract whereAuthorType($value)
 * @method static Builder|CommentContract whereCommentableId($value)
 * @method static Builder|CommentContract whereCommentableType($value)
 * @method static Builder|CommentContract whereApproverId($value)
 * @method static Builder|CommentContract whereApproverType($value)
 * @method static Builder|CommentContract whereCreatedAt($value)
 * @method static Builder|CommentContract whereDeletedAt($value)
 * @method static Builder|CommentContract whereId($value)
 * @method static Builder|CommentContract whereIsAutomatic($value)
 * @method static Builder|CommentContract whereIsApproved($value)
 * @method static Builder|CommentContract wherePublicId($value)
 * @method static Builder|CommentContract whereText($value)
 * @method static Builder|CommentContract whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|CommentContract onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|CommentContract withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CommentContract withoutTrashed()
 * @method static \Illuminate\Database\Query\Builder|CommentContract onlyApproved()
 * @method static \Illuminate\Database\Query\Builder|CommentContract withUnapproved()
 * @method static \Illuminate\Database\Query\Builder|CommentContract onlyUnapproved()
 */
interface CommentContract
{
    public function commentable(): MorphTo;

    public function author(): MorphTo;
}

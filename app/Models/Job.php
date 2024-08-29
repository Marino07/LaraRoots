<?
namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;


class Job extends Model{
   protected $table = 'job_listenings';
   protected $fillable = [
    'title',
    'salary'
   ];
}

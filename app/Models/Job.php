<?
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;


class Job extends Model{
    use HasFactory;
   protected $table = 'job_listenings';
   protected $fillable = [
    'title',
    'salary'
   ];
}

<?php
namespace App\Http\Controllers;


use App\rbac;
use Illuminate\Support\Facades\DB;

class rbacController extends Controller{
    public function text1(){
//        return '这是text1';
        //首先判断数据库是否连接成功

        //获取表数据
        $rbac =  DB::select('select * from role');
        var_dump($rbac);
    }

    //新增数据
    public function query1(){
//       $bool =  DB::table('index1')->insert(['id'=>'1','name'=>'zhangsan','age'=>18]);
//       var_dump($bool);

       //获取自增Id
//        $id = DB::table('index1')->insertGetId(['name'=>'lisi','age'=>70]);
//        var_dump($id);

        //增加多条数据
//        $bool =  DB::table('index1')->insert([
//                ['name'=>'lisi2','age'=>90],
//                ['name'=>'lisi3','age'=>100]
//        ]);
//        var_dump($bool);

        //更新数据库字段信息
//        DB::table('index1')
//            ->where('id',2)
//            ->update(['age'=>1000]);
        //自增
//        DB::table('index1')->increment('age');
        //带条件自减
//        DB::table('index1')->decrement('age',3);

        //带条件自增
//        DB::table('index1')
//            ->where('id',2)
//            ->increment('age',100);

        //自增和自减的时候其他条件变化
//                DB::table('index1')
//            ->where('id',2)
//            ->increment('age',100,['name'=>'wanwu']);

        //有条件的使用删除语句
//        DB::table('index1')
//            ->where('id',2)
//            ->delete();
        //删除多条语句
//        DB::table('index1')
//            ->where('id','>=',5)
//            ->delete();
    }

    //获取表单数据
    public function query2(){
//        $sc = DB::table('index1')->get();

        //获取表中的第一条数据
//        $sc = DB::table('index1')->first();

        //条件获取数据
//        $sc = DB::table('index1')
//            ->where('id','>=',3)
//            ->get();

        //给where()加多个条件
//        $sc = DB::table('index1')
//            ->whereRaw('id >= ? and age >= ?',[2,27])
//            ->get();

        //pluck()返回结果集中的指定字段
//        $sc = DB::table('index1')->pluck('name');

        //select()可以查询字段
//        $sc = DB::table('index1')
//            ->select('id','name')
//            ->get();

        //chunk();分段查询
//        DB::table('index1')->chunk(2,function ($students){
//            var_dump($students);
//        });
//        var_dump($sc);
    }

    public function hello(){

        //all();
//        $rbac = rbac::all();
        //find();
//        $rbac = rbac::find(3);


        //查询构造器在ORM中的使用
//        $rbac = rbac::get();

        rbac::chunk(3,function ($rbac){
            dd($rbac);
        });
//        dd($rbac);
    }

    public function orm2(){
        //使用模型新增数据
        $rbac = new rbac();
        $rbac->name = 'xiaohei';
        $rbac->age = 2;
        $bool = $rbac->save();
        dd($bool);
    }
    public function orm3(){
        //通过模型更新数据
//        $rbac = rbac::find(4);
//        $rbac->name = 'hello';
//        $bool = $rbac->save();
//        var_dump($bool);

        //结合查询语句进行批量的更新数据
        $num = rbac::where('id','>',1)->update(['age'=>20]);
        var_dump($num);
    }
    public function orm4(){
        //通过模型进行删除
//        $rbac = rbac::find(3);
//        $bool = $rbac->delete();
//        var_dump($bool);


        //通过主键删除
//        $num = rbac::destroy(1);
//        $num = rbac::destroy(11,12);
//        $num = rbac::destroy([13,14]);

        //删除指定条件的数据
        $num = rbac::where('id','>',15)->delete();
        var_dump($num);


    }

    public function orm5(){
//        return view('rbac.rbac');
        $name = 'lisi';
        return view('rbac.rbac',['name'=>$name]);
    }

    public function urlTest(){
        return '我是测试';
    }
}
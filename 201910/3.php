//
{hkcms:get sql="SELECT * FROM hkcms_article WHERE status=99 ORDER BY inputtime DESC" page="$page" num="5"}
    {:dump($data)}
{/hkcms:get}


//
{hkcms:get sql="SELECT * FROM hkcms_article WHERE status=99 ORDER BY inputtime DESC" page="$page" num="5"}
表前缀可以使用lvyecms代替，系统会自动替换为你安装时所设置的表前缀！
循环列表，默认返回数据是$data
    <ul>
             {volist name="data" id="vo"}
            <li>标题：{$vo.title}，地址：{$vo.url}</li>
        {/volist}
    </ul>
    分页：{$pages}
{/hkcms:get}

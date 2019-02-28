<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<!-- {extends file="ecjia-merchant.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.merchant.mh_comment.comment_list();
</script>
<!-- {/block} -->

<!-- {block name="home-content"} -->
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">
			<!-- {if $ur_here}{$ur_here}{/if} -->
			<div class="pull-right">
				{if $action_link}
					<a href="{$action_link.href}" class="btn btn-primary data-pjax">
						<i class="fa fa-plus"></i> {$action_link.text}
					</a>
				{/if}
			</div>
		</h2>
	</div>
</div>
{if $goods_info}
<div class="row">
	<div class="col-lg-12">
		<div class="panel">
	    	<div class="panel-body">
	        	<div class="row">
	        	  <div class="goods-img-comment">
	        		 <a href=""><img src="{RC_Upload::upload_url()}/{$goods_info.goods_thumb}" width="100" height="100"></a>
	        	  </div>
	        	  <div class="goods-info-comment">
		        	   <p>{$goods_info.goods_name}</p>     
		        	   <p>{t domain="comment"}价格：{/t}¥&nbsp;{$goods_info.shop_price}</p>
		        	   <p>{t domain="comment"}好评率：{/t}<font color="#FF0000"><strong>{$goods_info.goods_rank}%</strong></font></p>
	        	  </div>
	    		</div>
			</div>
		</div>
	</div>
</div>
{/if}

<div class="mh-comment-list row">
	<div class="col-lg-12">
		<div class="panel">
			<div class="panel-body">
				<div class="nav-heading filter">
				    <ul class="nav-status">
                		<li><span>{t domain="comment"}全部{/t}</span></li>
                		<!-- {if $select_rank} -->
                		<li class="hide-rank"><span>></span></li>
                		<li class="hide-rank">
                		<a class="data-pjax btn btn-primary no-show-rank" 
                			href='{url path="comment/mh_comment/init" args="{if $smarty.get.has_img neq null}&has_img={$smarty.get.has_img}{/if}{if $select_img}&select_img={$select_img}{/if}{if $goods_id}&goods_id={$goods_id}{/if}"}' 
                			style="padding:3px 5px;">
                			{if $smarty.get.rank eq 1} {t domain="comment"}好评{/t} {elseif $smarty.get.rank eq 2} {t domain="comment"}中评{/t} {elseif $smarty.get.rank eq 3}{t domain="comment"}差评{/t}{/if}
                		<i class=" close-status fontello-icon-cancel fa fa-times"></i></a>
                		</li>
                		<!-- {/if} -->
                		<!-- {if $select_img} -->
                		<li class="hide-img"><span>></span></li>
                		<li class="hide-img"><a class="data-pjax btn btn-primary no-show-img" href='{url path="comment/mh_comment/init" args="{if $smarty.get.status neq null}&status={$smarty.get.status}{/if}{if $smarty.get.rank neq null}&rank={$smarty.get.rank}{/if}{if $select_rank}&select_rank={$select_rank}{/if}{if $select_status}&select_status={$select_status}{/if}{if $goods_id}&goods_id={$goods_id}{/if}"}' style="padding:3px 5px;">{if $smarty.get.has_img eq 1}{t domain="comment"}有图{/t} {else}{t domain="comment"}无图{/t}{/if}
                			<i class=" close-status fontello-icon-cancel fa fa-times"></i></a>
                		</li>
                		<!-- {/if} -->
                	</ul>
				</div>
                <table class="table table-th-block">
                    <tbody>
                        <tr>
                            <td class="active w150">{t domain="comment"}评分级别：{/t}</td>
                            <td>
								<div class="status-distance"><a class="data-pjax" href='{url path="comment/mh_comment/init" args="rank=1&select_rank=2{if $smarty.get.select_img}&select_img={$smarty.get.select_img}{/if}{if $smarty.get.has_img neq null}&has_img={$smarty.get.has_img}{/if}{if $smarty.get.keywords}&keywords={$smarty.get.keywords}{/if}{if $goods_id}&goods_id={$goods_id}{/if}"}'>{t domain="comment"}好评{/t}</a></div>
                				<div class="status-distance"><a class="data-pjax" href='{url path="comment/mh_comment/init" args="rank=2&select_rank=2{if $smarty.get.select_img}&select_img={$smarty.get.select_img}{/if}{if $smarty.get.has_img neq null}&has_img={$smarty.get.has_img}{/if}{if $smarty.get.keywords}&keywords={$smarty.get.keywords}{/if}{if $goods_id}&goods_id={$goods_id}{/if}"}'>{t domain="comment"}中评{/t}</a></div>
                				<div class="status-distance"><a class="data-pjax" href='{url path="comment/mh_comment/init" args="rank=3&select_rank=2{if $smarty.get.select_img}&select_img={$smarty.get.select_img}{/if}{if $smarty.get.has_img neq null}&has_img={$smarty.get.has_img}{/if}{if $smarty.get.keywords}&keywords={$smarty.get.keywords}{/if}{if $goods_id}&goods_id={$goods_id}{/if}"}'>{t domain="comment"}差评{/t}</a></div>
							</td>
                        </tr>
                        <tr>
                            <td class="active">{t domain="comment"}有无晒图：{/t}</td>
                            <td>
								<div class="status-distance"><a class="data-pjax" href='{url path="comment/mh_comment/init" args="has_img=1&select_img=3{if $smarty.get.select_rank}&select_rank={$smarty.get.select_rank}{/if}{if $smarty.get.rank neq null}&rank={$smarty.get.rank}{/if}{if $smarty.get.keywords}&keywords={$smarty.get.keywords}{/if}{if $goods_id}&goods_id={$goods_id}{/if}"}'>{t domain="comment"}有{/t}</a></div>
				                <div class="status-distance"><a class="data-pjax" href='{url path="comment/mh_comment/init" args="has_img=0&select_img=3{if $smarty.get.select_rank}&select_rank={$smarty.get.select_rank}{/if}{if $smarty.get.rank neq null}&rank={$smarty.get.rank}{/if}{if $smarty.get.keywords}&keywords={$smarty.get.keywords}{/if}{if $goods_id}&goods_id={$goods_id}{/if}"}'>{t domain="comment"}无{/t}</a></div>
							</td>
                        </tr>
                    </tbody>
                </table>
            </div>
			<div class="panel-body panel-body-small">
				<form class="form-inline pull-right" name="searchForm" method="post" action='{url path="comment/mh_comment/init" args="{if $smarty.get.select_rank}&select_rank={$smarty.get.select_rank}{/if}{if $smarty.get.rank}&rank={$smarty.get.rank}{/if}{if $smarty.get.select_img}&select_img={$smarty.get.select_img}{/if}{if $smarty.get.has_img neq null}&has_img={$smarty.get.has_img}{/if}{if $goods_id}&goods_id={$goods_id}{/if}"}'>
					<div class="screen f_r">
						<div class="form-group">
							<input type="text" class="form-control" name="keywords" value="{$smarty.get.keywords}" placeholder='{t domain="comment"}输入用户名称{/t}'>
						</div>
						<button class="btn btn-primary screen-btn" type="button"><i class="fa fa-search"></i> {t domain="comment"}搜索{/t}</button>
					</div>
				</form>
			</div>
			<div class="panel-body panel-body-small">
				<section class="panel">
					<table class="table table-striped table-hover table-hide-edit">
						<thead>
							<tr>
								<th class="w200">{t domain="comment"}用户名{/t}</th>
								<th>{t domain="comment"}评论详情{/t}</th>
								<th class="w150">{t domain="comment"}星级{/t}</th>
							</tr>
						</thead>
						<tbody>
							<!-- {foreach from=$data.comment_list item=list} -->
							<tr>
								<td>{$list.user_name}</td>
								<td class="hide-edit-area">
									<span>
										<a href='{url path="goods/merchant/edit" args="goods_id={$list.id_value}"}'>{$list.goods_name}</a><br>
										{t domain="comment"}评论于{/t} {$list.add_time}<br>
										{$list.content}
									</span>
									<br>
									<!-- {foreach from=$list.comment_pic_list item=list_pic} -->
										<img src="{RC_Upload::upload_url()}/{$list_pic.file_path}" width="50" height="50" style="margin-top: 10px;">
									<!-- {/foreach} -->
									<div class="edit-list">
										<a class="data-pjax" href='{url path="comment/mh_comment/comment_detail" args="comment_id={$list.comment_id}"}' title='{t domain="comment"}查看详情{/t}'>{t domain="comment"}查看详情{/t}</a>&nbsp;|&nbsp;
										<a class="data-pjax" href='{url path="comment/mh_comment/comment_detail" args="comment_id={$list.comment_id}"}' title='{t domain="comment"}回复{/t}'>{t domain="comment"}回复{/t}</a>
								    </div>
								</td>
								<td>
									{section name=loop loop=$list.comment_rank}   
										<i class="fa fa-star" style="color:#FF9933;"></i>
									{/section}
									{section name=loop loop=5-$list.comment_rank}   
										<i class="fa fa-star" style="color:#bbb;"></i>
									{/section}
								</td>
							</tr>
							<tr>
								<td colspan="2"><input class="form-control small" value="" name="reply_content" type="text" placeholder='{t domain="comment"}感谢您对本店的支持！我们会更加的努力，为您提供更优质的服务。（可在此输入回复内容，也可选择系统自动回复）{/t}'></td>
								<td><input class="comment_reply btn btn-primary" type="button" data-id="{$list.comment_id}" data-url="{url path='comment/mh_comment/comment_reply'}" value='{t domain="comment"}快捷回复{/t}' /></td>
							</tr>
							<!-- {foreachelse} -->
							   <tr><td class="no-records" colspan="6">{t domain="comment"}没有找到任何记录{/t}</td></tr>
							<!-- {/foreach} -->
						</tbody>
					</table>
				</section>
				<!-- {$data.page} -->
			</div>
		</div>
	</div>
</div>
<!-- {/block} -->
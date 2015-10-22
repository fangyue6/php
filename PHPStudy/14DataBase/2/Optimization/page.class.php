<?php
/* 
 *   1. 总数
 *   2.2. 每页显示多少条
 *
 *
 *
 */
	//分页类
	class Page {
		private $total;   //总记录数
		private $nums;    //每显示的条数
		private $pages;   //总页数
		private $cpage;   //当前是哪页
		private $uri; //当前的url


		public function __construct($total, $nums) {
			$this->total = $total;
			$this->nums = $nums;
			$this->pages = $this->getPages();

			$this->uri = $this->setUri();
			//获取当前页
			$this->cpage = !empty($_GET['page']) ? $_GET['page'] : 1;
		}

		//就是为了除去url中的page=n这的字符串， 点链接就可以重新设置page=几了
		private function setUri() {
			//获取当前的url带参数的   PHPStudy.php?a=b&c=d
			$url = $_SERVER['REQUEST_URI'];

			
			//判断是否有?，有?说明有参数  ?a=b&page=5
			if(strstr($url, "?")) {
				//使用 parse_url()函数将url分成 path (/PHPStudy.php) 和query (a=b&page=5)两个部分
				$arr= parse_url($url);
				//如果有query下标在，说明有参数  $arr[query]="a=b&page=5"
				if(isset($arr['query'])) {
					//使用parse_str函数将参数a=b&c=d&page=5变成  $output['a']=b $output['c']=d $output['page']=5
					parse_str($arr['query'], $output);
				}

				//删除数组中的 下标是page的
				unset($output['page']);
				//再使用http_build_query将关联数组变成参数字符串 a=b&c=d, 再和原来的path组合， 
				$url = $arr['path']."?".http_build_query($output);  

				
			}else {
				$url.="?";
			}

			return $url;
		}

		//获取页数
		private function getPages() {
			return ceil($this->total/$this->nums);
		}

		private function first() {
			//如果当前页是第一页，则不显这些

			if($this->cpage > 1) {
				$prev = $this->cpage - 1;

				return '<a href="'.$this->uri.'&page=1">首页</a> <a href="'.$this->uri.'&page='.$prev.'">上一页</a>';
			}else{
				return "";
			}
		}

		private function flist() {
			$list = "";

			$num = 4;

			//当前页之前的设置
			for($i=$num; $i>=1; $i--) {
				//列表之后
				$page = $this->cpage - $i;
				//如果在页数内页显示
				if($page > 1)
					$list .= '&nbsp;<a href="'.$this->uri.'&page='.$page.'">'.$page.'</a>&nbsp;';
			
			}

			//当前页的设置
			
			if($this->pages > 1) {
				$list .= "&nbsp;".$this->cpage."&nbsp;";
			}

			//当前面之后的列表
			for($i=1; $i<=$num; $i++) {
				//列表之后
				$page = $this->cpage + $i;
				//如果在页数内页显示
				if($page <= $this->pages)
					$list .= '&nbsp;<a href="'.$this->uri.'&page='.$page.'">'.$page.'</a>&nbsp;';
				else
					break;	
			}

			return $list;

		}

		private function last() {
			if($this->cpage < $this->pages) {
				$next = $this->cpage + 1;

				return '<a href="'.$this->uri.'&page='.$next.'">下一页</a> <a href="'.$this->uri.'&page='.$this->pages.'">末页</a> ';
			}else{
				return "";
			}
		}
		//从多少条开始
		private function start() {
			return ($this->cpage-1)*$this->nums+1;
		}

		//从多少条结束
		private function end() {
			return min($this->cpage*$this->nums, $this->total);
		}
		//当前显示的条数
		private function currnum() {
			return $this->end() - $this->start()+1;
		}

		//调用这个方法，就可以获取分页
		function fpage() {
			 $arr= func_get_args();

			$fpage = "";

			$pages[0] = "&nbsp;共{$this->total}条记录&nbsp;";
			$pages[1] = "&nbsp;本页显示".$this->currnum()."条记录&nbsp;";
			$pages[2] = "&nbsp;从".$this->start()."-".$this->end()."条&nbsp;";
			$pages[3] = "&nbsp;{$this->cpage}/{$this->pages}&nbsp;";
			$pages[4] = "&nbsp;".$this->first()."&nbsp;";
			$pages[5] = "&nbsp;".$this->flist()."&nbsp;";
			$pages[6] = "&nbsp;".$this->last()."&nbsp;";

			if(count($arr) < 1  )
				$arr = array(0,1,2,3,4,5,6);

			foreach($arr as $n) {
				$fpage .= $pages[$n];	
			}

			return $fpage;
		}
	}

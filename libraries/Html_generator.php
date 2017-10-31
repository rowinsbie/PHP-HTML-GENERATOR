<?php
class Html_generator
{

	public $navigation = [];



	// Date generator

	public function createDay()
	{
		for($i = 1; $i <= 31; $i++)
		{
			echo "<option value='$i'>$i</option>\n";
		}
	}

	function createYear($year)
	{
		for($y = date('Y'); $y >= $year; $y--)
		{
			echo "<option value='$y'>$y</option>\n";
		}
	}

	function createMonth()
	{
		$months = array("January"=>"Jan",
					"February"=>"Feb",
					"March"=>"Mar",
					"April"=>"Apr",
					"May"=>"May",
					"June"=>"Jun",
					"July"=>"Jul",
					"August"=>"Aug",
					"September"=>"Sep",
					"October"=>"Oct",
					"November"=>"Nov",
					"December"=>"Dec");
		foreach ($months as $key => $value) {
			echo "<option value='$key'>$value</option>\n";
		}
	}





	// Navigation generator

	public function setNavigation($key,array $navigation)
	{
		$this->navigation[$key] = $navigation;
	}

	public function createNavigation($key,$type = "links")
	{
		foreach($this->navigation[$key] as $link => $text)
		{
			switch($type)
			{
				case "links":
					echo "<li><a class='link-btn' href='$link'>$text<a></li>\n";
					break;
				case 'modal':
					echo "<li><a class='modal-btn' data-toggle='modal' data-target='#$link' href='#'>$text</a></li>\n";	
					break;
				default:
					echo "Type of navigation is not found";	
			}
		}
	}


	public function createModal(array $m)
	{
		?>

			<div class="modal fade" id="<?php echo $m['id']; ?>" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title"><?php echo $m['title']; ?></h3>
							</div>
							<div class="modal-body">
								<?php
									if(!file_exists($m['file']))
									{
										echo $m['file'] . " is not found.";
										return false;
									}
									include $m['file'];

								?>
							</div>
							<div class="modal-footer">
								
							</div>
						</div>
					</div>
			</div>


		<?php
	}




}
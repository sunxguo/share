<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>谷歌地图Api简介</h1>

	<div id="body">
		<p>地址获取经纬度等信息:</p>
		<code>
			<a href="http://googleapi.fengdukeji.com/welcome/tolatlng?address=尚领世家&language=zh-CN">
				http://googleapi.fengdukeji.com/api/tolatlng?address=尚领世家&language=zh-CN
			</a>
			不设置language则默认英文
		</code>
		<p>经纬度获取地址等信息:</p>
		<code>
			<a href="http://googleapi.fengdukeji.com/api/toaddress?latlng=37.8245497,112.5539829&language=zh-CN">
				http://googleapi.fengdukeji.com/api/toaddress?latlng=37.8245497,112.5539829&language=zh-CN
			</a>
			不设置language则默认英文
		</code>
		<p>支持的语言:</p>
		<code>
			<p>
			<table style="border:0px;font-size:14px;font-family:Roboto, sans-serif;margin:0px;width:677px;color:#212121;">
				<tbody>
					<tr>
						<th style="border:0px;font-weight:500;font-size:16px;vertical-align:middle;color:#FFFFFF;">
							语言代码
						</th>
						<th style="border:0px;font-weight:500;font-size:16px;vertical-align:middle;color:#FFFFFF;">
							语言
						</th>
						<th style="border:0px;font-weight:500;font-size:16px;vertical-align:middle;color:#FFFFFF;">
							语言代码
						</th>
						<th style="border:0px;font-weight:500;font-size:16px;vertical-align:middle;color:#FFFFFF;">
							语言
						</th>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ar
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							阿拉伯语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							kn
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							卡纳达语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							bg
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							保加利亚语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ko
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							韩语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							bn
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							孟加拉语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							lt
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							立陶宛语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ca
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							加泰罗尼亚语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							lv
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							拉脱维亚语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							cs
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							捷克语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ml
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							马拉雅拉姆语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							da
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							丹麦语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							mr
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							马拉地语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							de
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							德语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							nl
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							荷兰语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							el
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							希腊语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							否
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							挪威语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							en
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							英语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							pl
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							波兰语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							en-AU
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							英语（澳大利亚）
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							pt
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							葡萄牙语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							en-GB
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							英语（英国）
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							pt-BR
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							葡萄牙语（巴西）
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							es
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							西班牙语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							pt-PT
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							葡萄牙语（葡萄牙）
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							eu
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							巴斯克语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ro
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							罗马尼亚语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							eu
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							巴斯克语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ru
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							俄语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							fa
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							波斯语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							sk
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							斯洛伐克语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							fi
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							芬兰语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							sl
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							斯洛文尼亚语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							fil
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							菲律宾语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							sr
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							塞尔维亚语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							fr
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							法语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							sv
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							瑞典语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							gl
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							加利西亚语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ta
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							泰米尔语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							gu
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							吉吉拉特语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							te
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							泰卢固语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							hi
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							印地语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							th
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							泰语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							hr
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							克罗地亚语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							tl
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							塔加拉族语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							hu
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							匈牙利语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							tr
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							土耳其语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							id
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							印度尼西亚语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							uk
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							乌克兰语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							it
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							意大利语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							vi
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							越南语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							iw
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							希伯来语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							zh-CN
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							简体中文
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ja
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							日语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							zh-TW
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							繁体中文
						</td>
					</tr>
				</tbody>
			</table>
		</p>
		</code>
		<p>
	<h3 id="StatusCodes" style="font-weight:500;font-size:20px;font-family:Roboto, sans-serif;color:#212121;">
		<h3 id="reverse-status" style="color:#212121;font-family:Roboto, sans-serif;font-weight:500;font-size:20px;">
			<span style="background-color:#FF9900;">地理编码</span><span style="line-height:1.5;background-color:#FF9900;">状态代码</span>
		</h3>
	</h3>
	<p style="color:#212121;font-family:Roboto, sans-serif;font-size:16px;">
		地理编码响应对象中的&nbsp;"status"&nbsp;字段包含了请求的状态，还可能包含调试信息，以帮助您查明地理编码不工作的原因。"status"&nbsp;字段可以包含以下值：
	</p>
	<ul style="color:#212121;font-family:Roboto, sans-serif;font-size:16px;">
		<li>
			"OK"&nbsp;表示未出现任何错误；已成功解析地址，并且至少返回了一个地理编码。
		</li>
		<li>
			"ZERO_RESULTS"&nbsp;表示地理编码成功，但未返回任何结果。如果向地理编码器传递了一个不存在address，就可能会发生这种情况。
		</li>
		<li>
			"OVER_QUERY_LIMIT"&nbsp;表示您已超出配额。
		</li>
		<li>
			"REQUEST_DENIED"&nbsp;表示系统已拒绝您的请求。
		</li>
		<li>
			"INVALID_REQUEST"&nbsp;一般表示缺少查询（address、components&nbsp;或&nbsp;latlng）。
		</li>
		<li>
			"UNKNOWN_ERROR"&nbsp;表示由于服务器发生错误，因此无法处理该请求。如果您重试一次，请求可能会成功
		</li>
	</ul>
	<p>
		<span><span style="font-size:16px;line-height:24px;">
		<h3 id="Results" style="font-weight:500;font-size:20px;font-family:Roboto, sans-serif;color:#212121;">
			结果
		</h3>
		<p style="color:#212121;font-family:Roboto, sans-serif;font-size:16px;">
			当地理编码器返回结果时，会将这些结果放在一个 (JSON)&nbsp;results&nbsp;数组中。即使地理编码器没有返回任何结果（例如，如果地址不存在），它仍然会返回一个空的&nbsp;results&nbsp;数组。（XML 响应包含零个或更多个&nbsp;&lt;result&gt;&nbsp;元素。）
		</p>
		<p style="color:#212121;font-family:Roboto, sans-serif;font-size:16px;">
			典型的结果由以下字段组成：
		</p>
		<ul style="color:#212121;font-family:Roboto, sans-serif;font-size:16px;">
			<li>
				<p>
					types[]&nbsp;数组表示返回结果的<i>类型</i>。此数组包含一组标记（可能为零个或多个），用于标识结果中所返回特征的类型。例如，“芝加哥”的地理编码返回“locality”，这表明“芝加哥”是一个城市，并且还返回“political”，这表明它是一个政治实体。
				</p>
			</li>
			<li>
				<p>
					formatted_address：是一个包含此位置可人工读取的地址的字符串。通常此地址相当于“邮政地址”，有时会因国家/地区而异。（请注意，由于许可限制，某些国家（如英国）不允许发布真实的邮政地址。）此地址通常由一个或多个<i>地址组成部分</i>组成。例如，地址“111 8th Avenue, New York, NY”包含以下地址组成部分：“111”（街道号）、“8th Avenue”（道路）、“New York”（城市）和“NY”（美国的一个州）。这些地址组成部分包含如下所述的附加信息。
				</p>
			</li>
			<li>
				<p>
					address_components[]&nbsp;是包含独立的地址组成部分的数组，如上所述。通常，每个address_component&nbsp;均包含：
				</p>
				<ul>
					<li>
						types[]，一个表示地址组成部分<i>类型</i>的数组。
					</li>
					<li>
						long_name&nbsp;是地理编码器返回的地址组成部分的完整文本说明或名称。
					</li>
					<li>
						short_name&nbsp;是地址组成部分的文本名称缩写（如有）。例如，Alaska 州的地址组成部分可以有&nbsp;long_name“Alaska”和&nbsp;short_name“AK”（使用双字母邮政缩写表示）。
					</li>
				</ul>
				<p>
					请注意，address_components[]&nbsp;中包含的地址组成部分可能比&nbsp;formatted_address&nbsp;中记录的更多。
				</p>
			</li>
			<li>
				postcode_localities[]&nbsp;是一个数组，表示一个邮政编码中包含的所有地方。只有当结果是一个包含多个地方的邮政编码时，才会有此数组。
			</li>
			<li>
				<p>
					geometry&nbsp;包含以下信息：
				</p>
				<ul>
					<li>
						location：其中包含地理编码经度、纬度值。对于普通的地址查找，此字段通常是最重要的。
					</li>
					<li>
						<p>
							location_type&nbsp;存储有关指定位置的附加数据。目前支持以下值：
						</p>
						<ul>
							<li>
								"ROOFTOP"&nbsp;表示返回的结果是一个精确的地理编码，我们使其位置信息精确到街道地址的精度。
							</li>
							<li>
								"RANGE_INTERPOLATED"&nbsp;表示返回的结果反映了两个精确点（例如交叉路口）之间用内插法计算得到的近似值（通常在道路上）。当某个街道地址的 rooftop 地理编码不可用时，通常会返回内插值结果。
							</li>
							<li>
								"GEOMETRIC_CENTER"&nbsp;表示返回的结果是某个位置（如多段线（例如街道）或多边形（地区））的几何中心。
							</li>
							<li>
								"APPROXIMATE"&nbsp;表示返回的结果是近似值。
							</li>
						</ul>
					</li>
					<li>
						viewport&nbsp;包含用于显示返回结果的推荐视口，指定为两个纬度、经度值，分别定义视口边框的&nbsp;southwest&nbsp;和&nbsp;northeast&nbsp;角。视口通常用来在向用户显示结果时为该结果加边框。
					</li>
					<li>
						bounds（可选返回）存储可完全包含返回结果的边框。请注意，这些边界可能与推荐的视口不一致。（例如，旧金山包含<a href="https://en.wikipedia.org/wiki/Farallon_Islands">费拉隆岛</a>，理论上它是这个城市的一部分，但可能不应该在视口中返回。）
					</li>
				</ul>
			</li>
			<li>
				<p>
					partial_match&nbsp;表示虽然地理编码器能够匹配所请求的地址的一部分，但它未能返回原始请求的精确匹配项。您不妨检查一下原始请求中是否有拼写错误和/或地址不完整的情况。
				</p>
				<p>
					对于请求中所传递的行政区划内不存在的街道地址，最常发生部分匹配的情况。当请求与同一行政区划中的两个或更多位置相匹配时，也可能会返回部分匹配。例如，“21 Henr St, Bristol, UK”将返回 Henry Street 和 Henrietta Street 这两项部分匹配结果。请注意，如果请求中包含拼写错误的地址组成部分，地理编码服务可能会建议一个备选地址。以这种方式触发的建议也将标记为部分匹配。
				</p>
			</li>
			<li>
				place_id&nbsp;是唯一一个可以与其他 Google API 结合使用的标识符。例如，您可以在&nbsp;<a href="https://developers.google.com/places/web-service/details">Google Places API</a>&nbsp;请求中使用&nbsp;place_id&nbsp;获取当地企业的详情，如电话号码、营业时间、用户评论等。请参阅<a href="https://developers.google.com/places/place-id">地点 ID 概览</a>。
			</li>
		</ul>
		<h3 id="Types" style="font-weight:500;font-size:20px;font-family:Roboto, sans-serif;color:#212121;">
			地址类型和地址组成部分类型
		</h3>
		<p style="color:#212121;font-family:Roboto, sans-serif;font-size:16px;">
			结果中的&nbsp;types[]&nbsp;数组表示<i>地址类型</i>。地址类型的示例包括街道地址、国家/地区或政治实体。在address_components[]&nbsp;中也有一个&nbsp;types[]&nbsp;数组，用来表示地址各个部分的类型。示例包括门牌号码或国家/地区。（以下是类型的完整列表。）地址可能有多种类型。这些类型可能会被视为“标记”。例如，许多城市都标有&nbsp;political&nbsp;和&nbsp;locality&nbsp;类型。
		</p>
		<p style="color:#212121;font-family:Roboto, sans-serif;font-size:16px;">
			地理编码器以地址类型和地址组成部分类型数组这两种形式支持并返回以下类型：
		</p>
		<ul style="color:#212121;font-family:Roboto, sans-serif;font-size:16px;">
			<li>
				street_address&nbsp;表示精确的街道地址。
			</li>
			<li>
				route：表示已命名的路线（例如“US 101”）
			</li>
			<li>
				intersection：表示主要交叉路口，通常是两条主要道路的交叉路口
			</li>
			<li>
				political：表示政治实体。通常，这种类型表示某个民政管理部门的多边形
			</li>
			<li>
				country：表示国家政治实体，通常是由地理编码器返回的最高级别类型
			</li>
			<li>
				administrative_area_level_1：表示国家/地区级别以下的一级行政实体。在美国，这种行政级别就是州。并非所有国家都设有这类行政级别
			</li>
			<li>
				administrative_area_level_2：表示国家/地区级别以下的二级行政实体。在美国，这种行政级别就是县。并非所有国家都设有这类行政级别
			</li>
			<li>
				administrative_area_level_3：表示国家/地区级别以下的三级行政实体。此类型表示较小的行政区划单位。并非所有国家都设有这类行政级别
			</li>
			<li>
				administrative_area_level_4：表示国家/地区级别以下的四级行政实体。此类型表示较小的行政区划单位。并非所有国家都设有这类行政级别
			</li>
			<li>
				administrative_area_level_5：表示国家/地区级别以下的五级行政实体。此类型表示较小的行政区划单位。并非所有国家都设有这类行政级别
			</li>
			<li>
				colloquial_area：表示实体的常用替代名称
			</li>
			<li>
				locality&nbsp;表示合并的城市或城镇政治实体。
			</li>
			<li>
				ward&nbsp;表示一种特定的日本行政区划类型，以便于区分某个日本地址中的多个行政区划组成部分。
			</li>
			<li>
				sublocality：表示 locality 以下的一级行政实体。某些位置可能会收到其他类型之一：从sublocality_level_1&nbsp;到&nbsp;sublocality_level_5。每个 sublocality 级别都是一个行政实体。数字越大，表示的地理区域越小
			</li>
			<li>
				neighborhood&nbsp;表示已命名的街区
			</li>
			<li>
				premise&nbsp;表示已命名的位置，通常是具有常见名称的一栋或一群建筑物
			</li>
			<li>
				subpremise&nbsp;表示指定位置以下的一级实体，通常是同名建筑群中的单个建筑物
			</li>
			<li>
				postal_code&nbsp;表示邮政编码，用于国内的地址邮寄。
			</li>
			<li>
				natural_feature：表示著名的自然景观
			</li>
			<li>
				airport：表示机场
			</li>
			<li>
				park：表示已命名的公园。
			</li>
			<li>
				point_of_interest&nbsp;表示已命名的景点。通常，这些“景点”是不容易归入其他类别的著名地方实体，如“帝国大厦”或“自由女神像”。
			</li>
		</ul>
		<p style="color:#212121;font-family:Roboto, sans-serif;font-size:16px;">
			空的类型列表表示特殊的地址组成部分没有对应的已知类型，例如法国的地方 (Lieu-dit)。
		</p>
		<p style="color:#212121;font-family:Roboto, sans-serif;font-size:16px;">
			除了上述类型之外，地址组成部分还可能包括下列类型。
		</p>
		<p class="note" style="color:#FFFFFF;font-size:14px;font-family:Roboto, sans-serif;background:#039BE5;">
			<strong>注</strong>：此列表并不全面，并且随时可能更改。
		</p>
		<ul style="color:#212121;font-family:Roboto, sans-serif;font-size:16px;">
			<li>
				floor：表示某个建筑物地址的楼层
			</li>
			<li>
				establishment&nbsp;通常表示某个尚未归类的地方。
			</li>
			<li>
				point_of_interest&nbsp;表示已命名的景点。
			</li>
			<li>
				parking&nbsp;表示停车场或停车设施。
			</li>
			<li>
				post_box&nbsp;表示特定的邮政信箱。
			</li>
			<li>
				postal_town&nbsp;表示地理区域的分组，如&nbsp;locality&nbsp;和&nbsp;sublocality，在某些国家/地区用于邮寄地址。
			</li>
			<li>
				room&nbsp;表示某个建筑物地址的房间。
			</li>
			<li>
				street_number&nbsp;表示确切的门牌号码。
			</li>
			<li>
				bus_station、train_station&nbsp;和&nbsp;transit_station&nbsp;表示巴士、火车或公交车站的位置。
			</li>
		</ul>
		<h3 id="reverse-status" style="font-weight:500;font-size:20px;font-family:Roboto, sans-serif;color:#212121;">
			<span style="background-color:#FF9900;">反向地理编码状态代码</span>
		</h3>
		<p style="color:#212121;font-family:Roboto, sans-serif;font-size:16px;">
			地理编码响应对象中的&nbsp;"status"&nbsp;字段包含了请求的状态，还可能包含调试信息，以帮助您查明反向地理编码不工作的原因。"status"&nbsp;字段可以包含以下值：
		</p>
		<ul style="color:#212121;font-family:Roboto, sans-serif;font-size:16px;">
			<li>
				"OK"&nbsp;表示未出现任何错误，并且至少返回了一个地址。
			</li>
			<li>
				"ZERO_RESULTS"&nbsp;表示反向地理编码成功，但未返回任何结果。如果向地理编码器传递了某个偏远位置的&nbsp;latlng&nbsp;参数，就可能会发生这种情况。
			</li>
			<li>
				"OVER_QUERY_LIMIT"&nbsp;表示您已超出配额。
			</li>
			<li>
				"REQUEST_DENIED"&nbsp;表示系统已拒绝该请求。这可能是因为该请求包含了&nbsp;result_type&nbsp;或location_type&nbsp;参数，但未包含 API 密钥或客户端 ID。
			</li>
			<li>
				"INVALID_REQUEST"&nbsp;通常表示下列情况之一：
				<ul>
					<li>
						缺少查询（address、components&nbsp;或&nbsp;latlng）。
					</li>
					<li>
						提供的&nbsp;result_type&nbsp;或&nbsp;location_type&nbsp;无效。
					</li>
				</ul>
			</li>
			<li>
				"UNKNOWN_ERROR"&nbsp;表示由于服务器发生错误，因此无法处理该请求。如果您重试一次，请求可能会成功
			</li>
		</ul>
<br />
</span></span>
	</p>
</p>
<p>
	<br />
</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
</div>

</body>
</html>
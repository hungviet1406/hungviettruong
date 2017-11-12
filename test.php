<!DOCTYPE html>
<html>
    <head>
        <?php include 'header.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <?php
            $array = array(
                '1. Tôi luôn cân nhắc và tập trung vào việc gì đó.',
                '2. Tôi chấp nhận mọi việc.',
                '3. Tôi luôn nỗ lực cải tiến mọi công việc.',
                '4. Tôi có tố chat làm lãnh đạo.',
                '5. Tôi là người đa cảm nên thường ở một mình.',
                '6. Tôi luôn sẵn sang tận hưởng những công việc thú vị.',
                '7. Tôi thích làm việc với mọi người.',
                '8. Nếu có vấn đề tôi luôn miệt mài suy nghĩ về vấn đề đó cho tới khi nó được giải quyết.',
                '9. Tôi quyết định theo ý muốn của bản thân.',
                '10. Tôi thuộc kiểu nguời lười biếng.',
                '11. Tôi quan tâm đến cuộc sống cá nhân hơn là chuyện tập thể.',
                '12. Tôi hy vọng mọi việc diễn ra suôn sẻ.',
                '13. Khi có một mình, tôi tận hưởng những sở thích đặc biệt của riêng bản thân.',
                '14. Vấn đề quan tâm của tôi là giúp đỡ những người khác.',
                '15. Tôi thuộc kiểu người ưa mạo hiểm.',
                '16.  Tôi đầu tư thời gian để phát huy năng lực bản thân.',
                '17. Tôi thuộc kiểu người lãng mạn và có tố chất nghệ thuật.',
                '18. Tôi thích cuộc sống thay đổi không ngừng.',
                '19. Tôi luôn khen ngợi người khác hết lòng.',
                '20. Tôi cố gắng giảm thiểu những công việc gây phiền toái.',
                '21. Đôi lúc tôi cảm thấy tức giận.',
                '22. Khi có chỉ thị (hướng dẫn) chính xác, năng suất làm việc của tôi tăng lên.',
                '23. Tôi đồng cảm với suy nghĩ người khác hơn bản thân mình.',
                '24. Tôi luôn nghĩ mình phải mạnh mẽ lên.',
                '25. Tôi là người có khả năng tự chủ và có tính đạo đức.',
                '26. Thi thoảng tôi có khuynh hướng nghi ngờ người mình yêu.',
                '27. Tôi cố gắng duy trì mối quan hệ tốt đẹp với người khác.',
                '28. Tôi thích những hoạt động gây cảm giác kích thích và hưng phấn.',
                '29. Tôi là người có tư duy phân tích.',
                '30. Tôi chú trọng vào kết quả hơn quá trình.',
                '31. Đôi khi tôi vui vẻ như một đứa trẻ.',
                '32. Tôi xem mục tiêu là trung tâm chứ không phải con người.',
                '33. Hành động của tôi đặt nền móng cho nguyên tắc.',
                '34. Đôi khi tôi nghi ngờ và chán ghét bản thân.',
                '35. Tôi luôn cố gắng đến cùng cho sự hoàn hảo.',
                '36. Tôi có khuynh hướng chi phối mọi người.',
                '37. Có lúc tôi cảm thấy mình như người xa lạ.',
                '38. Tôi có khuynh hướng tiết kiện tiền bạc và thời gian.',
                '39. Tôi có khả năng thích ứng cực kì tốt, nên có thể ứng phó với mọi tình huống.',
                '40. Tôi phát huy tinh thần trách nhiệm và hợp tác tốt với bộ phận của mình.',
                '41. Tôi sở hữu cảm xúc đặc biệt hơn so với người khác.',
                '42. Tôi luôn đẩy mạnh việc xúc tiến công việc.',
                '43. Đôi lúc cảm xúc của tôi thay đổi tùy thuộc vào bầu không khí xung quanh.',
                '44. Tôi thể hiện chủ trương cá nhân một cách công kích.',
                '45. Tôi luôn cạnh tranh quá mức.',
                '46. Mối quan tâm của tôi là hiểu về thế giới quay quanh mình.',
                '47. Tôi muốn kiểm soát mọi người.',
                '48. Khi giúp được bạn bè tôi thấy rất vui.',
                '49. Tôi luôn suy nghĩ đến vấn đề an toàn trong hầu hết công việc.',
                '50. Tôi chú trọng đến thành tựu trong công việc hơn là quan tâm đến người khác.',
                '51. Tôi dễ đồng tình với ý kiến của bạn bè.',
                '52. Tôi đối đãi tận tình và luôn quan tâm đến người khác.',
                '53. Tôi chỉ thị và thúc đẩy động lực cho người khác.',
                '54. Đôi lúc tôi vô tình khó tính và cứng nhắc.',
                '55. Tôi muốn mọi việc trên thế gian trôi qua nhẹ nhàng.',
                '56. Bản thân tôi chủ động suy nghĩ và tự lập.',
                '57. Tôi đang sống bằng tinh thần lạc quan.',
                '58. Tôi thuyết phục người khác bằng sự tự tin cao ngút.',
                '59. Mọi người nói tôi cần có thêm dũng khí.',
                '60. Tôi nhận được sự tín nhiệm từ mọi người.',
                '61. Tôi thuộc kiểu người không quan tâm đến chuyện người khác.',
                '62. Tôi đang cố gắng rất nhiều để gần gũi hơn với mọi người.',
                '63. Tôi đang tìm kiếm vô vàn những trải nghiệm mới.',
                '64. Tôi là người có trái tim ấm áp nhưng thi thoảng vẫn nảy sinh lòng đố kị.',
                '65. Tôi luôn rõ rang giữa đúng và sai nhưng đôi khi nghiêm khắc với điều đó.',
                '66. Tôi luôn tin rằng thành công có thể dạt được tình yêu.',
                '67. Tôi khó có thể cố định vào một công việc.',
                '68. Tôi thuộc kiểu người quan sát mọi việc một cách thấu đáo và thông tuệ.',
                '69. Vì lo sợ kết quả nên tôi thường phải lê lết với công việc.',
                '70. Tôi là người theo chủ nghĩa hòa bình, theo đuổi sự hòa hợp.',
                '71. Tôi làm việc được giao một cách có hiệu quả.',
                '72. Tôi dễ hi sinh bản thân vì cảm xúc của người khác.',
                '73. Tôi hành động chủ yếu dựa vào lí trí và lương tâm của bản thân.',
                '74. Tôi luôn chạy theo cảm xúc và tự làm khổ mình.',
                '75. Tôi phán đoán và tìm hiểu mọi chuyện bằng cái đầu.',
                '76. Tôi có thể hi sinh cho người đáng tin.',
                '77. Tôi luôn cố gắng để nhận được thiện cảm từ người khác.',
                '78. Để không bị bị bỏ lại tôi luôn hướng đến diều gì đó đến cùng.',
                '79. Tôi là nguời không có tính nhẫn nại.',
                '80. Tôi không thích cách sống bình thường.',
                '81. Tôi luôn cố gắng để duy trì một tình bạn vĩnh cửu với ngững người thân quen.');
        ?>
    </head>
    <body>
        <div class="w3-card-4">
            <div class="w3-container w3-teal w3-cell-row">
                <!--<div class="w3-container center">-->
                    <button class="w3-btn w3-orange w3-text-white w3-cell" onclick="window.location.href='index.php'">&#10094; HomePage &#10095;</button>
                <!--</div>-->
                <h2 class="w3-cell">Hướng dẫn</h2>
            </div>
            <div class="w3-container">
                <h4 class="w3-text-brown">Sau đây là bài trắc nghiệm kiểm tra tính cách. Các mục câu hỏi bên dưới không có đáp án đúng hay sai.
                    <br/> Anh/Chị hãy nghĩ về cảm xúc và thái độ của mình trong cuộc sống thường ngày.
                    <br/> Căn cứ vào câu hỏi trong bài trắc nghiệm, hãy chọn thái độ mà mình phản ứng lại với tình huống.
                </h4>
                <div class="w3-container">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- QC_enneagram -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-1592350739058082"
                         data-ad-slot="3745348444"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <div class="w3-card-4 w3-container center" align="center">
                    <iframe src="http://www.nhaccuatui.com/mh/auto/T0X51l8tIV" width="620" height="382" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="w3-container w3-teal">
                <h2>Hoàn thành thông tin</h2>
            </div>

            <form class="w3-container" method="post" action="action_page.php">
                <p>      
                    <label class="w3-text-teal"><b>Tên</b></label>
                    <input class="w3-input w3-border w3-sand" name="first" required type="text"></p>
                <p>      
                    <label class="w3-text-teal"><b>Họ</b></label>
                    <input class="w3-input w3-border w3-sand" name="last" required type="text"></p>
                <?php 
//                    for ($i =0; $i < 3; $i++) {
                    for ($i =0; $i < count($array); $i++) {
                ?>
                <p>
                    <label class="w3-text-teal"><b><?php echo $array[$i]?></b></label>
                    <div class="w3-cell-row">
                        <div class="w3-container w3-cell w3-mobile">
                            <input class="w3-radio" type="radio" id="gender<?php echo $i?>-1" name="gender<?php echo $i?>" value="1" required /><label for="gender<?php echo $i?>-1" class="w3-text-brown"> Hoàn toàn sai</label>
                        </div>
                        <div class="w3-container w3-cell w3-mobile">
                            <input class="w3-radio" type="radio" id="gender<?php echo $i?>-2" name="gender<?php echo $i?>" value="2" ><label for="gender<?php echo $i?>-2" class="w3-text-brown"> Sai</label>
                        </div>
                        <div class="w3-container w3-cell w3-mobile">
                            <input class="w3-radio" type="radio" id="gender<?php echo $i?>-3" name="gender<?php echo $i?>" value="3" ><label for="gender<?php echo $i?>-3" class="w3-text-brown"> Bình thường</label>
                        </div>
                        <div class="w3-container w3-cell w3-mobile">
                            <input class="w3-radio" type="radio" id="gender<?php echo $i?>-4" name="gender<?php echo $i?>" value="4" ><label for="gender<?php echo $i?>-4" class="w3-text-brown"> Đồng ý</label>
                        </div>
                        <div class="w3-container w3-cell w3-mobile">
                            <input class="w3-radio" type="radio" id="gender<?php echo $i?>-5" name="gender<?php echo $i?>" value="5" ><label for="gender<?php echo $i?>-5" class="w3-text-brown"> Hoàn toàn đồng ý</label>
                        </div>
                    </div><br/>
                    </p>
                    <?php } ?>
                    <p class="w3-center">
                        <input type="submit" value="Xem kết quả" name="submit_form" class="w3-btn w3-teal w3-center"></input></p>
            </form>
        </div>
    </body>
</html>
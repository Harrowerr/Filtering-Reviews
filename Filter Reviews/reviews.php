<!DOCTYPE html>
<html>
<head>
    <title>Review Filter</title>
</head>
<body>
    <h1>Filter Reviews</h1>

<form method="GET" action="">
    <label for="prioritize-text">Prioritize by Text:</label>
    <select id="prioritize-text" name="prioritize-text">
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select><br><br>

    <label for="order-by-rating">Order by Rating:</label>
    <select id="order-by-rating" name="order-by-rating">
        <option value="highest">Highest First</option>
        <option value="lowest">Lowest First</option>
    </select><br><br>

    <label for="order-by-date">Order by Date:</label>
    <select id="order-by-date" name="order-by-date">
        <option value="newest">Newest First</option>
        <option value="oldest">Oldest First</option>
    </select><br><br>

    <label for="minimum-rating">Minimum Rating:</label>
    <select id="minimum-rating" name="minimum-rating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select><br><br>

    <input type="submit" value="Filter">
</form>
</body>
</html>

<?php
$reviews = [
    [
        //Adding the informations(datas) about the reviews that are from review.json document
        'text' => 'Great product!',
        'id' => 2097047,
        'reviewId' => '93f131be27dc1122bb7ef0048ad10e4f',
        'reviewFullText' => '5 star review!',
        'reviewText' => '5 star review!',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 5,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T13:00:35+00:00',
        'reviewCreatedOnTime' => 1611579635,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #20",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097046,
        'reviewId' => '6e7bd4c71a56885ef583bd79186af689',
        'reviewFullText' => '4 star review',
        'reviewText' => '4 star review',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 4,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T13:00:21+00:00',
        'reviewCreatedOnTime' => 1611579621,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #19",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097045,
        'reviewId' => 'ced8bd056d0adec93c651f935c7dde80',
        'reviewFullText' => '3 star review',
        'reviewText' => '3 star review',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 3,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T13:00:10+00:00',
        'reviewCreatedOnTime' => 1611579610,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #18",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097044,
        'reviewId' => 'b0dfee9017fafe7d751f0fea1f3ce540',
        'reviewFullText' => '2 star review',
        'reviewText' => '2 star review',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 2,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:59:57+00:00',
        'reviewCreatedOnTime' => 1611579597,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #17",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097043,
        'reviewId' => '10588b914a39967f3a702b02f3751794',
        'reviewFullText' => '1 star review',
        'reviewText' => '1 star review',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 1,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:59:57+00:00',
        'reviewCreatedOnTime' => 1611579580,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #16",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097042,
        'reviewId' => '1d14901bbb67ded3368d2d8d8b5989d8',
        'reviewFullText' => '5 star review',
        'reviewText' => '5 star review',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 5,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:59:27+00:00',
        'reviewCreatedOnTime' => 1611579567,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #15",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097041,
        'reviewId' => 'ca10718af15af32f71da09a6e5f78c48',
        'reviewFullText' => '',
        'reviewText' => '',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 4,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:59:15+00:00',
        'reviewCreatedOnTime' => 1611579555,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #14",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097040,
        'reviewId' => '65b3ba7d67109d2a4f573fca44d5e532',
        'reviewFullText' => '3 star review',
        'reviewText' => '3 star review',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 3,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:58:46+00:00',
        'reviewCreatedOnTime' => 1611579526,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #13",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097039,
        'reviewId' => 'c111f4f05a1048e3a43a28e5bfd0be27',
        'reviewFullText' => '',
        'reviewText' => '',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 2,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:58:22+00:00',
        'reviewCreatedOnTime' => 1611579502,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #12",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097038,
        'reviewId' => 'be88045286fcb7ca91e234b37eef511b',
        'reviewFullText' => '1 star review',
        'reviewText' => '1 star review',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 1,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:58:06+00:00',
        'reviewCreatedOnTime' => 1611579486,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #11",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097037,
        'reviewId' => '70b57c0433d0221b0788b106fb9fdd5a',
        'reviewFullText' => '',
        'reviewText' => '',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 5,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:57:48+00:00',
        'reviewCreatedOnTime' => 1611579468,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #10",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097036,
        'reviewId' => '59cbd1e887e8cce76ef68318b198ddf0',
        'reviewFullText' => '4 star review',
        'reviewText' => '4 star review',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 4,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:57:35+00:00',
        'reviewCreatedOnTime' => 1611579455,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #9",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097034,
        'reviewId' => 'ac50da2870193abe25ba529597cfbd23',
        'reviewFullText' => '',
        'reviewText' => '',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 3,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:57:11+00:00',
        'reviewCreatedOnTime' => 1611579431,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #8",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097032,
        'reviewId' => 'f0c8bdd06d6c4ec35de765657e118602',
        'reviewFullText' => '2 star review',
        'reviewText' => '2 star review',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 2,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:56:55+00:00',
        'reviewCreatedOnTime' => 1611579415,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #7",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097031,
        'reviewId' => 'ef2ad7498e260ec9462d0f27801c86b3',
        'reviewFullText' => '',
        'reviewText' => '',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 1,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:56:34+00:00',
        'reviewCreatedOnTime' => 1611579394,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #6",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097030,
        'reviewId' => 'd55229232defac9397fc6f12550d4f1f',
        'reviewFullText' => '5 star review',
        'reviewText' => '5 star review',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 5,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:56:17+00:00',
        'reviewCreatedOnTime' => 1611579377,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #5",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097029,
        'reviewId' => '3a6dd5070788c36f28c4f78eb349c248',
        'reviewFullText' => '4 star review',
        'reviewText' => '4 star review',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 4,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:55:57+00:00',
        'reviewCreatedOnTime' => 1611579357,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #4",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097028,
        'reviewId' => '01223a92f8823251b9678720def5ff43',
        'reviewFullText' => '3 star review',
        'reviewText' => '3 star review',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 3,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:55:40+00:00',
        'reviewCreatedOnTime' => 1611579340,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #3",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097027,
        'reviewId' => '5b8c2de55dbb5ccf9f8d033c1859b559',
        'reviewFullText' => '2 star review',
        'reviewText' => '2 star review',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 2,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:55:21+00:00',
        'reviewCreatedOnTime' => 1611579321,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #2",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    [
        'id' => 2097026,
        'reviewId' => '691d4d278dc23aa9a478e078b9382c2a',
        'reviewFullText' => '1 star review',
        'reviewText' => '1 star review',
        'numLikes' => 0,
        'numComments' => 0,
        'numShares' => 0,
        'rating' => 1,
        'reviewCreatedOn' => '2 months ago',
        'reviewCreatedOnDate' => '2021-01-25T12:55:06+00:000',
        'reviewCreatedOnTime' => 1611579306,
        'reviewerId'=> null,
        'reviewerUrl'=> null,
        'reviewerName'=> "Reviewer #1",
        'reviewerEmail'=> null,
        'sourceType'=> "custom",
        'isVerified'=> false,
        'source'=> "custom",
        'sourceName'=> "1-20 Reviews",
        'sourceId'=> "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
        'tags'=> null,
        'href'=> null,
        'logoHref'=> null,
        'photos'=> null,
    ],
    
];

// Creating of the filter parameters
$prioritizeText = isset($_GET['prioritize-text']) ? $_GET['prioritize-text'] : 'yes';
$orderByRating = isset($_GET['order-by-rating']) ? $_GET['order-by-rating'] : 'highest';
$orderByDate = isset($_GET['order-by-date']) ? $_GET['order-by-date'] : 'newest';
$minimumRating = isset($_GET['minimum-rating']) ? intval($_GET['minimum-rating']) : 1;

// Creating of the filtering and sorting the reviews
$filteredReviews = array_filter($reviews, function($review) use ($prioritizeText, $minimumRating) {
    if ($prioritizeText === 'no') {
        return $review['rating'] >= $minimumRating;
    } else {
        return $review['reviewText'] !== '' && $review['reviewFullText'] !== '' && $review['rating'] >= $minimumRating;
    }
});

usort($filteredReviews, function($a, $b) use ($orderByRating, $orderByDate) {
    if ($orderByRating === 'highest') {
        if ($a['rating'] !== $b['rating']) {
            return $b['rating'] - $a['rating'];
        }
    } else {
        if ($a['rating'] !== $b['rating']) {
            return $a['rating'] - $b['rating'];
        }
    }
    
    if ($orderByDate === 'oldest') {
        return strtotime($a['reviewCreatedOnDate']) - strtotime($b['reviewCreatedOnDate']);
    } else {
        return strtotime($b['reviewCreatedOnDate']) - strtotime($a['reviewCreatedOnDate']);
    }
});

// Displaying of the filtered and sorted reviews using foreach loop
        foreach ($filteredReviews as $review) {
        echo "<div>";
        echo "<h3>Rating: " . $review['rating'] . "</h3>";
        echo "<p>Id: " . $review['id'] . "</p>";
        echo "<p>Review Id: " . $review['reviewId'] . "</p>";
        echo "<p>Review Full Text: " . $review['reviewFullText'] . "</p>";
        echo "<p>Review Text: " . $review['reviewText'] . "</p>";
        echo "<p>Num Likes: " . $review['numLikes'] . "</p>";
        echo "<p>Num Comments: " . $review['numComments'] . "</p>";
        echo "<p>Num Shares: " . $review['numShares'] . "</p>";
        echo "<p>Review Created On: " . $review['reviewCreatedOn'] . "</p>";
        echo "<p>Review Created On Date: " . $review['reviewCreatedOnDate'] . "</p>";
        echo "<p>Reviewer Id: " . $review['reviewerId'] . "</p>";
        echo "<p>Reviewer Url: " . $review['reviewerUrl'] . "</p>";
        echo "<p>Reviewer Name: " . $review['reviewerName'] . "</p>";
        echo "<p>Reviewer Email: " . $review['reviewerEmail'] . "</p>";
        echo "<p>Source Type: " . $review['sourceType'] . "</p>";
        echo "<p>Source: " . $review['source'] . "</p>";
        echo "<p>Source Name: " . $review['sourceName'] . "</p>";
        echo "<p>Source Id: " . $review['sourceId'] . "</p>";
        echo "<p>Tags: " . $review['tags'] . "</p>";
        echo "<p>Href: " . $review['href'] . "</p>";
        echo "<p>Logo Href: " . $review['logoHref'] . "</p>";
        echo "<p>Photos: " . $review['photos'] . "</p>";
        echo "</div>";

}
?>
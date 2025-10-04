function findMedianSortedArrays($nums1, $nums2) {
    // Merge arrays
    $merged = array_merge($nums1, $nums2);
    sort($merged);

    $n = count($merged);

    if ($n % 2 == 1) {
        // Odd length → middle element
        return $merged[intval($n / 2)];
    } else {
        // Even length → average of two middle elements
        $mid1 = $merged[intval($n / 2) - 1];
        $mid2 = $merged[intval($n / 2)];
        return ($mid1 + $mid2) / 2;
    }
}

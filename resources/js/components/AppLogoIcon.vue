<script setup lang="ts">
import type { HTMLAttributes } from 'vue';

defineOptions({
    inheritAttrs: false,
});

interface Props {
    className?: HTMLAttributes['class'];
}

defineProps<Props>();
</script>

<template>
    <svg :class="className" v-bind="$attrs" viewBox="0 0 1922 2050" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask0_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="964" y="925" width="361" height="131">
            <path
                d="M1193.29 953.928L964.08 1009.67C1046.16 1086.44 1217.72 1054.58 1324.65 1006.93C1317.51 980.079 1312.67 952.884 1309.8 925.593L1193.29 953.928Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask0_1_26)">
            <path d="M1324.65 925.593H964.08V1086.44H1324.65V925.593Z" fill="url(#paint0_linear_1_26)" />
        </g>
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M1193.29 953.928L964.08 1009.67C964.08 1009.67 1159.52 1041.75 1313.27 952.421C1311.89 943.496 1310.74 934.55 1309.8 925.593L1193.29 953.928Z"
            fill="#005B50"
        />
        <mask id="mask1_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="826" y="855" width="489" height="129">
            <path
                d="M1115.44 869.764L826.801 891.771C922.034 1015.41 1183.64 993.352 1314.47 944.158C1309.31 914.68 1306.5 884.94 1305.7 855.258L1115.44 869.764Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask1_1_26)">
            <path d="M1314.47 855.258H826.801V1015.41H1314.47V855.258Z" fill="url(#paint1_linear_1_26)" />
        </g>
        <mask id="mask2_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="659" y="699" width="650" height="192">
            <path
                d="M1025.17 739.952L659.05 699.178C758.355 894.999 1154.07 916.284 1306.2 868.327C1304.68 835.878 1305.57 803.458 1308.35 771.487L1025.17 739.952Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask2_1_26)">
            <path d="M1308.35 699.178H659.05V916.284H1308.35V699.178Z" fill="url(#paint2_linear_1_26)" />
        </g>
        <mask id="mask3_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="589" y="449" width="727" height="348">
            <path
                d="M989.733 583.75L589.139 449.951C657.667 709.759 1152.57 827.899 1306.96 789.928C1308.59 764.347 1311.46 739 1315.33 714.109L1308.23 690.127L989.733 583.75Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask3_1_26)">
            <path d="M1315.33 449.951H589.139V827.899H1315.33V449.951Z" fill="url(#paint3_linear_1_26)" />
        </g>
        <mask id="mask4_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="675" y="222" width="653" height="490">
            <path
                d="M1037.78 440.707L675.962 222.839C686.541 499.405 1171.39 727.837 1315.95 710.115C1319.27 689.323 1323.3 668.887 1327.83 648.887L1325.44 613.923L1037.78 440.707Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask4_1_26)">
            <path d="M1327.83 222.839H675.962V727.837H1327.83V222.839Z" fill="url(#paint4_linear_1_26)" />
        </g>
        <mask id="mask5_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="824" y="77" width="531" height="565">
            <path
                d="M1121.93 343.369L827.203 77.3719C787.382 333.955 1192.07 631.131 1329.42 641.839C1336.64 610.884 1345.08 581.099 1354.11 552.916L1121.93 343.369Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask5_1_26)">
            <path d="M1354.11 77.3719H787.382V641.839H1354.11V77.3719Z" fill="url(#paint5_linear_1_26)" />
        </g>
        <mask id="mask6_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="1001" y="0" width="379" height="573">
            <path
                d="M1227.88 281.292L1013.9 0C939.292 210.768 1222.24 523.322 1347.99 572.536C1357.89 539.75 1368.73 508.942 1379.64 480.777L1227.88 281.292Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask6_1_26)">
            <path d="M1379.64 0H939.291V572.536H1379.64V0Z" fill="url(#paint6_linear_1_26)" />
        </g>
        <mask id="mask7_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="1171" y="206" width="321" height="1058">
            <path
                d="M1363.29 948.588C1336.2 833.315 1332.66 683.192 1398.01 504.932L1171.18 206.745C1171.18 206.745 1192.17 396.014 1274.42 526.526C1274.42 526.526 1165.61 756.604 1221.09 988.916C1244.13 1085.42 1295.53 1182.3 1394.84 1263.24C1427.95 1250.62 1460.27 1233.2 1491.45 1209.69C1491.45 1209.69 1402.59 1115.82 1363.29 948.588Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask7_1_26)">
            <path d="M1491.45 206.746H1165.61V1263.24H1491.45V206.746Z" fill="url(#paint7_linear_1_26)" />
        </g>
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M1363.29 948.588C1336.2 833.315 1332.66 683.192 1398.01 504.932L1171.18 206.745C1171.18 206.745 1280.81 372.062 1363.06 502.571C1363.06 502.571 1254.25 732.652 1309.73 964.964C1331.54 1056.29 1378.75 1147.97 1467.94 1226.14C1475.84 1221.02 1483.68 1215.55 1491.45 1209.69C1491.45 1209.69 1402.59 1115.82 1363.29 948.588Z"
            fill="#5EF9F6"
        />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M827.203 77.3719C827.203 77.3719 958.06 389.408 1266.35 545.306C1270.26 535.693 1273.03 529.54 1274.03 527.385C1208.93 476.896 1132.63 394.532 1077.37 303.146L827.203 77.3719Z"
            fill="#005B50"
        />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M1242.09 614.284C1153.91 572.924 1038.55 489.246 951.42 388.706L675.962 222.839C675.962 222.839 950.753 545.292 1231 654.048C1234.61 639.83 1238.37 626.527 1242.09 614.284Z"
            fill="#005B50"
        />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M589.139 449.951C589.139 449.951 896.263 682.908 1214.77 732.732C1216.55 721.428 1218.53 710.426 1220.64 699.765C1135.21 678.672 1022.37 629.216 921.548 560.978L589.139 449.951Z"
            fill="#005B50"
        />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M659.05 699.178C659.05 699.178 862.728 846.328 1205.99 819.345C1206.33 811.518 1206.79 803.765 1207.37 796.103C1121.07 791.648 1008.11 768.146 901.925 726.229L659.05 699.178Z"
            fill="#005B50"
        />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M826.801 891.771C826.801 891.771 1019.57 946.419 1209.27 921.072C1207.97 909.519 1207.01 898.024 1206.36 886.623C1141.9 892.563 1064.79 891.041 988.429 879.446L826.801 891.771Z"
            fill="#005B50"
        />
        <mask id="mask8_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="838" y="1484" width="292" height="426">
            <path
                d="M838.136 1909.1C1013.89 1893.24 1143.45 1577.56 1127.97 1485.21C1113.58 1485.42 1099.46 1485.2 1085.7 1484.63L838.136 1909.1Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask8_1_26)">
            <path d="M1143.45 1484.63H838.136V1909.1H1143.45V1484.63Z" fill="url(#paint8_linear_1_26)" />
        </g>
        <mask id="mask9_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="932" y="1468" width="208" height="552">
            <path
                d="M1000.93 1720.73L932.074 2019.31C1120.07 1949.92 1168.72 1565.48 1124.42 1468.82C1112.7 1472.17 1101.07 1475.2 1089.58 1477.96L1035.55 1570.6L1000.93 1720.73Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask9_1_26)">
            <path d="M1168.72 1468.82H932.074V2019.31H1168.72V1468.82Z" fill="url(#paint9_linear_1_26)" />
        </g>
        <mask id="mask10_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="1052" y="1452" width="128" height="598">
            <path
                d="M1057 1734.71L1063.85 2049.82C1233.75 1933.09 1185.04 1537.49 1116.43 1452.31C1110.51 1455.75 1104.6 1459.09 1098.69 1462.34L1052.8 1541.03L1057 1734.71Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask10_1_26)">
            <path d="M1233.75 1452.31H1052.8V2049.82H1233.75V1452.31Z" fill="url(#paint10_linear_1_26)" />
        </g>
        <mask id="mask11_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="1070" y="1438" width="181" height="558">
            <path
                d="M1121.5 1709.31L1194.68 1995.91C1325.21 1853.12 1196.66 1501.82 1115.84 1438.53C1113.47 1440.76 1111.1 1442.96 1108.72 1445.14L1070.69 1510.35L1121.5 1709.31Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask11_1_26)">
            <path d="M1325.21 1438.53H1070.69V1995.91H1325.21V1438.53Z" fill="url(#paint11_linear_1_26)" />
        </g>
        <mask id="mask12_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="1076" y="1428" width="212" height="447">
            <path
                d="M1152.67 1651.12L1265.42 1874.62C1347.24 1732.82 1176.94 1465.94 1098.61 1428.38L1097.23 1430.39C1104.25 1438.87 1108.72 1445.14 1108.72 1445.14L1076.57 1500.27L1152.67 1651.12Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask12_1_26)">
            <path d="M1347.24 1428.38H1076.57V1874.62H1347.24V1428.38Z" fill="url(#paint12_linear_1_26)" />
        </g>
        <mask id="mask13_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="399" y="825" width="788" height="517">
            <path
                d="M796.741 1041.21L399.049 1320.45C668.187 1427.45 1078.15 1103.1 1186.75 922.873C1156.93 892.11 1129.51 859.272 1104.35 825.219L796.741 1041.21Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask13_1_26)">
            <path d="M1186.75 825.219H399.049V1427.44H1186.75V825.219Z" fill="url(#paint13_linear_1_26)" />
        </g>
        <mask id="mask14_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="0" y="654" width="1059" height="311">
            <path
                d="M548.02 734.237L0 834.566C251.864 1098.87 930.788 901.596 1058.29 757.891C1043.44 734.427 1029.59 710.696 1016.6 686.963L983.726 654.469L548.02 734.237Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask14_1_26)">
            <path d="M1058.29 654.468H0V1098.87H1058.29V654.468Z" fill="url(#paint14_linear_1_26)" />
        </g>
        <mask id="mask15_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="22" y="558" width="991" height="211">
            <path
                d="M546.288 564.515L22.6161 558.683C207.191 847.215 866.83 787.902 1012.02 678.611C992.15 641.684 974.495 604.862 958.828 569.108L546.288 564.515Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask15_1_26)">
            <path d="M1012.02 558.682H22.6161V847.214H1012.02V558.682Z" fill="url(#paint15_linear_1_26)" />
        </g>
        <mask id="mask16_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="1031" y="780" width="891" height="956">
            <path
                d="M1667.93 1098.8C1667.93 1098.8 1821.39 1082.65 1921.55 1190.88C1921.55 1190.88 1907 1097.19 1868.24 1069.73C1935.07 895.723 1732.31 754.53 1548.03 784.927C1253.58 833.504 1012.2 1492.47 1033.06 1735.27C1230.95 1552.16 1597.94 1441.22 1667.93 1098.8Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask16_1_26)">
            <path d="M1935.07 754.531H1012.2V1735.27H1935.07V754.531Z" fill="url(#paint16_linear_1_26)" />
        </g>
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M1074.01 1451.04C1160.17 1269.91 1401.93 1237.92 1532.64 1234.39C1429.97 1226.1 1341.19 1195.74 1264.9 1152.58C1246.1 1141.94 1228.06 1130.53 1210.75 1118.48C1209.77 1117.8 1208.8 1117.12 1207.83 1116.44C1202.37 1126.63 1197.02 1136.93 1191.77 1147.32C1165.51 1199.31 1141.85 1253.59 1121.3 1307.79C1102.96 1356.15 1087.08 1404.45 1074.01 1451.04Z"
            fill="#003780"
        />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M1313.27 952.426C1313.27 952.426 1599.33 772.317 1872.92 949.36C1836.46 836.649 1686.99 762.004 1548.03 784.927C1463.81 798.824 1383.92 862.664 1313.27 952.426Z"
            fill="#FCE2A6"
        />
        <mask id="mask17_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="971" y="976" width="355" height="386">
            <path
                d="M1149.79 1106.1L971.753 1361.29C1119.94 1365.58 1261.81 1184.32 1325.98 1043.86C1295.47 1023.54 1266.95 1000.86 1240.29 976.376L1149.79 1106.1Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask17_1_26)">
            <path d="M1325.98 976.376H971.753V1365.58H1325.98V976.376Z" fill="url(#paint17_linear_1_26)" />
        </g>
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M1149.79 1106.1L971.753 1361.29C971.753 1361.29 1193.05 1222.43 1267.15 999.88C1257.99 992.252 1249.04 984.41 1240.29 976.376L1149.79 1106.1Z"
            fill="#005B50"
        />
        <mask id="mask18_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="733" y="910" width="529" height="459">
            <path
                d="M999.336 1090.8L733.065 1364.51C935.179 1403.67 1174.66 1153.5 1261.12 990.655C1230.28 966.005 1201.55 939.045 1174.84 910.391L999.336 1090.8Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask18_1_26)">
            <path d="M1261.12 910.391H733.065V1403.67H1261.12V910.391Z" fill="url(#paint18_linear_1_26)" />
        </g>
        <mask id="mask19_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="112" y="744" width="1008" height="454">
            <path
                d="M625.358 917.648L112.369 1134.97C406.916 1332.12 999.517 1016.99 1119.07 844.671C1098.35 817.947 1079.07 790.379 1061.17 762.38L1033.22 744.858L625.358 917.648Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask19_1_26)">
            <path d="M1119.07 744.858H112.368V1332.12H1119.07V744.858Z" fill="url(#paint19_linear_1_26)" />
        </g>
        <mask id="mask20_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="139" y="319" width="831" height="297">
            <path
                d="M596.894 410.633L139.736 319.197C249.909 592.784 802.573 654.936 969.9 593.85C951.07 552.784 934.902 512.851 921.104 475.474L596.894 410.633Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask20_1_26)">
            <path d="M969.9 319.198H139.736V654.937H969.9V319.198Z" fill="url(#paint20_linear_1_26)" />
        </g>
        <mask id="mask21_1_26" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="475" y="386" width="1193" height="851">
            <path
                d="M1313.27 952.426C1185.87 862.059 1051.33 716.67 960.364 483.326L475.742 386.402C475.742 386.402 661.716 555.27 856.981 612.558C856.981 612.558 950.185 935.093 1207.83 1116.44C1314.85 1191.76 1450.25 1242.73 1619.12 1236.1C1640.85 1194.71 1657.62 1149.27 1667.93 1098.8C1667.93 1098.8 1498.1 1083.52 1313.27 952.426Z"
                fill="white"
            />
        </mask>
        <g mask="url(#mask21_1_26)">
            <path d="M1667.93 386.402H475.741V1242.73H1667.93V386.402Z" fill="url(#paint21_linear_1_26)" />
        </g>
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M1313.27 952.426C1185.87 862.059 1051.33 716.67 960.364 483.326L475.742 386.402C475.742 386.402 728.474 454.212 923.738 511.502C923.738 511.502 1016.95 834.037 1274.59 1015.38C1375.88 1086.67 1502.59 1136.13 1659.04 1135.6C1662.38 1123.64 1665.36 1111.38 1667.93 1098.8C1667.93 1098.8 1498.1 1083.52 1313.27 952.426Z"
            fill="#5EF9F6"
        />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M22.6161 558.682C22.6161 558.682 424.4 753.081 865.385 638.176C860.86 625.264 858.234 616.746 857.335 613.756C748.882 620.644 601.533 605.774 467.105 563.633L22.6161 558.682Z"
            fill="#005B50"
        />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M901.601 727.575C778.285 763.638 591.149 781.571 417.218 758.181L0 834.565C0 834.565 553.233 913.631 925.334 776.585C916.503 759.369 908.606 742.933 901.601 727.575Z"
            fill="#005B50"
        />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M112.368 1134.97C112.368 1134.97 619.463 1097.3 977.972 868.572C969.865 855.839 962.214 843.233 955 830.843C852.09 884.555 697.321 934.128 538.045 954.641L112.368 1134.97Z"
            fill="#005B50"
        />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M399.049 1320.45C399.049 1320.45 728.937 1288.21 1044.88 961.9C1038.38 953.864 1032.08 945.792 1025.96 937.709C936.718 1008.63 804.479 1083.98 662.873 1135.21L399.049 1320.45Z"
            fill="#005B50"
        />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M733.065 1364.51C733.065 1364.51 971.42 1250.3 1136.92 1059.65C1125.54 1049.36 1114.56 1038.83 1103.98 1028.11C1045.4 1090.26 967.812 1156.06 882.166 1211.24L733.065 1364.51Z"
            fill="#005B50"
        />
        <defs>
            <linearGradient id="paint0_linear_1_26" x1="1171.09" y1="1048.92" x2="1042.16" y2="841.955" gradientUnits="userSpaceOnUse">
                <stop stop-color="#008A80" />
                <stop offset="1" stop-color="#EBF855" />
            </linearGradient>
            <linearGradient id="paint1_linear_1_26" x1="1066.71" y1="936.366" x2="691.948" y2="1034.9" gradientUnits="userSpaceOnUse">
                <stop stop-color="#008A80" />
                <stop offset="1" stop-color="#EBF855" />
            </linearGradient>
            <linearGradient id="paint2_linear_1_26" x1="910.857" y1="805.765" x2="540.479" y2="795.768" gradientUnits="userSpaceOnUse">
                <stop stop-color="#008A80" />
                <stop offset="1" stop-color="#EBF855" />
            </linearGradient>
            <linearGradient id="paint3_linear_1_26" x1="1004.14" y1="649.436" x2="446.069" y2="536.414" gradientUnits="userSpaceOnUse">
                <stop stop-color="#008A80" />
                <stop offset="1" stop-color="#EBF855" />
            </linearGradient>
            <linearGradient id="paint4_linear_1_26" x1="1117.06" y1="605.558" x2="703.532" y2="137.967" gradientUnits="userSpaceOnUse">
                <stop stop-color="#008A80" />
                <stop offset="1" stop-color="#EBF855" />
            </linearGradient>
            <linearGradient id="paint5_linear_1_26" x1="1267.61" y1="597.51" x2="798.895" y2="31.0776" gradientUnits="userSpaceOnUse">
                <stop stop-color="#008A80" />
                <stop offset="1" stop-color="#EBF855" />
            </linearGradient>
            <linearGradient id="paint6_linear_1_26" x1="1245.51" y1="552.958" x2="1074.04" y2="21.512" gradientUnits="userSpaceOnUse">
                <stop stop-color="#008A80" />
                <stop offset="1" stop-color="#EBF855" />
            </linearGradient>
            <linearGradient id="paint7_linear_1_26" x1="1288.77" y1="1038.93" x2="1358.34" y2="507.074" gradientUnits="userSpaceOnUse">
                <stop stop-color="#00478F" />
                <stop offset="1" stop-color="#47EADF" />
            </linearGradient>
            <linearGradient id="paint8_linear_1_26" x1="804.933" y1="1912.92" x2="971.303" y2="1719.52" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FFCE4B" />
                <stop offset="1" stop-color="#F856BF" />
            </linearGradient>
            <linearGradient id="paint9_linear_1_26" x1="912.034" y1="1936.83" x2="1064.33" y2="1724.66" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FFCE4B" />
                <stop offset="1" stop-color="#F856BF" />
            </linearGradient>
            <linearGradient id="paint10_linear_1_26" x1="1012.34" y1="1893.18" x2="1149.84" y2="1743.94" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FFCE4B" />
                <stop offset="1" stop-color="#F856BF" />
            </linearGradient>
            <linearGradient id="paint11_linear_1_26" x1="1142.19" y1="1850.18" x2="1206.15" y2="1697.68" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FFCE4B" />
                <stop offset="1" stop-color="#F856BF" />
            </linearGradient>
            <linearGradient id="paint12_linear_1_26" x1="1228.86" y1="1766.45" x2="1202.65" y2="1588.76" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FFCE4B" />
                <stop offset="1" stop-color="#F856BF" />
            </linearGradient>
            <linearGradient id="paint13_linear_1_26" x1="723.185" y1="1184.59" x2="348.114" y2="1498.05" gradientUnits="userSpaceOnUse">
                <stop stop-color="#008A80" />
                <stop offset="1" stop-color="#EBF855" />
            </linearGradient>
            <linearGradient id="paint14_linear_1_26" x1="760.7" y1="905.431" x2="-56.3575" y2="803.936" gradientUnits="userSpaceOnUse">
                <stop stop-color="#008A80" />
                <stop offset="1" stop-color="#EBF855" />
            </linearGradient>
            <linearGradient id="paint15_linear_1_26" x1="900.434" y1="763.361" x2="-57.5942" y2="612.291" gradientUnits="userSpaceOnUse">
                <stop stop-color="#008A80" />
                <stop offset="1" stop-color="#EBF855" />
            </linearGradient>
            <linearGradient id="paint16_linear_1_26" x1="1461.18" y1="1585.34" x2="1490.25" y2="790.523" gradientUnits="userSpaceOnUse">
                <stop stop-color="#003780" />
                <stop offset="1" stop-color="#D820D2" />
            </linearGradient>
            <linearGradient id="paint17_linear_1_26" x1="1219.05" y1="1191.96" x2="910.89" y2="1099.85" gradientUnits="userSpaceOnUse">
                <stop stop-color="#008A80" />
                <stop offset="1" stop-color="#EBF855" />
            </linearGradient>
            <linearGradient id="paint18_linear_1_26" x1="981.392" y1="1180.44" x2="696.697" y2="1604.98" gradientUnits="userSpaceOnUse">
                <stop stop-color="#008A80" />
                <stop offset="1" stop-color="#EBF855" />
            </linearGradient>
            <linearGradient id="paint19_linear_1_26" x1="706.275" y1="986.253" x2="55.6895" y2="1361.53" gradientUnits="userSpaceOnUse">
                <stop stop-color="#008A80" />
                <stop offset="1" stop-color="#EBF855" />
            </linearGradient>
            <linearGradient id="paint20_linear_1_26" x1="851.785" y1="663.335" x2="218.336" y2="287.345" gradientUnits="userSpaceOnUse">
                <stop stop-color="#008A80" />
                <stop offset="1" stop-color="#EBF855" />
            </linearGradient>
            <linearGradient id="paint21_linear_1_26" x1="1284.27" y1="1129.82" x2="888.9" y2="543.09" gradientUnits="userSpaceOnUse">
                <stop stop-color="#00478F" />
                <stop offset="1" stop-color="#47EADF" />
            </linearGradient>
        </defs>
    </svg>
</template>

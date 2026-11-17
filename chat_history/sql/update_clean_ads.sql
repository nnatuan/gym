-- ==============================================================================
-- SCRIPT RÀ SOÁT VÀ LOẠI BỎ TỪ NGỮ TUYỆT ĐỐI / VI PHẠM QUY ĐỊNH QUẢNG CÁO
-- Dự án: Gọn Khỏe by Qcare - Hợp tác phòng Gym
-- Áp dụng cho: CSDL `demo` / `gym`
-- ==============================================================================

-- 1. Cập nhật thông tin cấu hình hệ thống (Title, Meta Description, Keywords chuẩn mực)
UPDATE `gym_tconfig` 
SET `cvalue` = 'GỌN KHỎE by Qcare - Hợp tác cùng phòng Gym | Chăm sóc cân nặng & Sức khỏe chuyển hóa'
WHERE `nid` = 3 AND (`cvalue` = 'gym' OR `cvalue` IS NULL OR `cvalue` LIKE '%tuyệt đối%' OR `cvalue` LIKE '%100%%');

UPDATE `gym_tconfig` 
SET `cvalue` = 'Gọn Khỏe do Qcare Health vận hành - Chăm sóc cân nặng và sức khỏe chuyển hóa kết hợp tập luyện cá nhân hóa cùng phòng Gym và huấn luyện viên PT.'
WHERE `nid` = 4 AND (`cvalue` = 'gym' OR `cvalue` IS NULL OR `cvalue` LIKE '%tuyệt đối%' OR `cvalue` LIKE '%100%%');

UPDATE `gym_tconfig` 
SET `cvalue` = 'Gọn Khỏe, Qcare Health, hợp tác phòng gym, chăm sóc cân nặng, sức khỏe chuyển hóa, PT gym, Fit and Lean'
WHERE `nid` = 2 AND (`cvalue` = 'gym' OR `cvalue` IS NULL);

-- 2. Rà soát và thay thế các từ ngữ tuyệt đối trong bảng Tin tức (gym_tnews)
UPDATE `gym_tnews`
SET 
  `ctitle` = REPLACE(REPLACE(REPLACE(`ctitle`, 'tuyệt đối', 'tin cậy'), '100%', 'toàn diện'), 'hoàn toàn', 'chủ động'),
  `cshort_content` = REPLACE(REPLACE(REPLACE(REPLACE(`cshort_content`, 'tuyệt đối không', 'chú trọng không'), 'tuyệt đối', 'tin cậy'), '100%', 'toàn diện'), 'triệt để', 'hiệu quả'),
  `ccontent` = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(`ccontent`, 
    'an tâm hợp tác tuyệt đối', 'an tâm phối hợp rõ ràng, tin cậy'),
    'tuyệt đối không lạm dụng', 'tuân thủ đúng hướng dẫn chuyên môn và không lạm dụng'),
    'tuyệt đối', 'tin cậy'),
    '100%', 'trọn vẹn'),
    'Hoàn toàn không', 'Không'),
    'triệt để', 'hiệu quả')
WHERE `ctitle` LIKE '%tuyệt đối%' OR `ctitle` LIKE '%100%%' OR `ctitle` LIKE '%hoàn toàn%'
   OR `cshort_content` LIKE '%tuyệt đối%' OR `cshort_content` LIKE '%100%%' OR `cshort_content` LIKE '%triệt để%'
   OR `ccontent` LIKE '%tuyệt đối%' OR `ccontent` LIKE '%100%%' OR `ccontent` LIKE '%hoàn toàn%' OR `ccontent` LIKE '%triệt để%';

-- 3. Rà soát và thay thế các từ ngữ tuyệt đối trong bảng Bài viết (gym_tarticle)
UPDATE `gym_tarticle`
SET 
  `ctitle` = REPLACE(REPLACE(REPLACE(`ctitle`, 'tuyệt đối', 'tin cậy'), '100%', 'toàn diện'), 'hoàn toàn', 'chủ động'),
  `cshort_content` = REPLACE(REPLACE(REPLACE(REPLACE(`cshort_content`, 'tuyệt đối không', 'chú trọng không'), 'tuyệt đối', 'tin cậy'), '100%', 'toàn diện'), 'triệt để', 'hiệu quả'),
  `ccontent` = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(`ccontent`, 
    'an tâm hợp tác tuyệt đối', 'an tâm phối hợp rõ ràng, tin cậy'),
    'tuyệt đối không lạm dụng', 'tuân thủ đúng hướng dẫn chuyên môn và không lạm dụng'),
    'tuyệt đối', 'tin cậy'),
    '100%', 'trọn vẹn'),
    'Hoàn toàn không', 'Không'),
    'triệt để', 'hiệu quả')
WHERE `ctitle` LIKE '%tuyệt đối%' OR `ctitle` LIKE '%100%%' OR `ctitle` LIKE '%hoàn toàn%'
   OR `cshort_content` LIKE '%tuyệt đối%' OR `cshort_content` LIKE '%100%%' OR `cshort_content` LIKE '%triệt để%'
   OR `ccontent` LIKE '%tuyệt đối%' OR `ccontent` LIKE '%100%%' OR `ccontent` LIKE '%hoàn toàn%' OR `ccontent` LIKE '%triệt để%';

-- 4. Rà soát và thay thế trong bảng Sản phẩm / Dịch vụ (gym_tproducts)
UPDATE `gym_tproducts`
SET 
  `cproducts` = REPLACE(REPLACE(`cproducts`, 'tuyệt đối', 'chất lượng'), '100%', 'chuẩn y khoa'),
  `cdescription` = REPLACE(REPLACE(REPLACE(`cdescription`, 'tuyệt đối', 'tin cậy'), '100%', 'toàn diện'), 'triệt để', 'hiệu quả'),
  `cdetail` = REPLACE(REPLACE(REPLACE(REPLACE(`cdetail`, 'tuyệt đối', 'tin cậy'), '100%', 'trọn vẹn'), 'hoàn toàn', 'chủ động'), 'tối ưu nhất', 'tối ưu')
WHERE `cproducts` LIKE '%tuyệt đối%' OR `cproducts` LIKE '%100%%'
   OR `cdescription` LIKE '%tuyệt đối%' OR `cdescription` LIKE '%100%%'
   OR `cdetail` LIKE '%tuyệt đối%' OR `cdetail` LIKE '%100%%' OR `cdetail` LIKE '%tối ưu nhất%';

-- 5. Rà soát trong bảng Module nội dung (gym_tmodule)
UPDATE `gym_tmodule`
SET 
  `cnote` = REPLACE(REPLACE(REPLACE(`cnote`, 'tuyệt đối', 'tin cậy'), '100%', 'trọn vẹn'), 'hoàn toàn', 'chủ động')
WHERE `cnote` LIKE '%tuyệt đối%' OR `cnote` LIKE '%100%%' OR `cnote` LIKE '%hoàn toàn%';

-- 6. Rà soát cấu hình chung (gym_tconfig)
UPDATE `gym_tconfig`
SET 
  `cvalue` = REPLACE(REPLACE(`cvalue`, 'tuyệt đối', 'tin cậy'), '100%', 'trọn vẹn')
WHERE `cvalue` LIKE '%tuyệt đối%' OR `cvalue` LIKE '%100%%';

COMMIT;


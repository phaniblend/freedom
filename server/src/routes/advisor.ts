import { Router } from 'express';
const router = Router();
router.get('/', (req, res) => res.json({ message: 'Advisor routes - coming soon' }));
export default router; 